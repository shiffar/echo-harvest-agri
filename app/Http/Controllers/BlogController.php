<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Inertia\Response;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch the blogs from the database
        $blogs = Blog::all();

        // Return data using Inertia
        return Inertia::render('Admin/BlogCURD', [
            'blogs' => $blogs,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'blog_file' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('blog_file')) {
            $file = $request->file('blog_file');
            // Generate a unique file name with a smaller size
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('blogs', $filename, 'public');
        }

        // Store blog data
        $blog = Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $filePath, // Store the file path in the database
        ]);

        // Redirect with Inertia
        return redirect()->route('admin.blogcurd')->with('success', 'Blog created successfully!');
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'blog_file' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('blog_file')) {
            $file = $request->file('blog_file');
            // Generate a unique file name with a smaller size
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('blogs', $filename, 'public');
            $blog->image = $path;
        }

        $blog->save();

        return redirect()->route('admin.blogcurd')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
{
    // Delete the blog image from storage if it exists
    if ($blog->image) {
        Storage::disk('public')->delete($blog->image);
    }

    // Delete the blog record from the database
    $blog->delete();

    // Redirect with success message
    return redirect()->route('admin.blogcurd')->with('success', 'Blog deleted successfully.');
}

public function show(Request $request)
{
    // Fetch paginated blogs, you can customize the per-page value as needed
    $blogs = Blog::paginate(10); // Fetch 10 blogs per page

    return Inertia::render('Website/Blog', [
        'blogs' => $blogs,
    ]);
}

public function home_show()
    {
        $blogs = Blog::all();
        return Inertia::render('Website/Home', [
            'blogs' => $blogs,
        ]);
    }

}
