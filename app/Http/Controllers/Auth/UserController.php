<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UserController extends Controller
{
    public function update(Request $request)
    {
        // Validate request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'profile_image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Update user details
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        // Handle password update
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Handle profile image update
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($user->profile_image && Storage::exists('public/profile_images/' . $user->profile_image)) {
                Storage::delete('public/profile_images/' . $user->profile_image);
            }

            // Generate a smaller name for the image
            $file = $request->file('profile_image');
            $filename = 'profile_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Store new image
            $path = $file->storeAs('public/profile_images', $filename);
            $user->profile_image = $filename;
        }

        // Save the user
        $user->save();

        return Inertia::location('/admin/setting');
    }
}
