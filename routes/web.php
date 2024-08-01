<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\UserController;
use Inertia\Inertia;

// Website routes
Route::get('/', function () {
    return Inertia::render('Website/Home', ['layout' => 'website']);
});

Route::get('/about', function () {
    return Inertia::render('Website/About', ['layout' => 'website']);
});

Route::get('/blog', function () {
    return Inertia::render('Website/Blog', ['layout' => 'website']);
});

Route::get('/blog', [BlogController::class, 'show'])->name('blog');

Route::get('/', [BlogController::class, 'home_show'])->name('home');

// Admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return Inertia::render('Admin/Dashboard', ['layout' => 'admin']);
    })->name('admin.dashboard'); // Ensure the route name is set

    Route::get('/admin/setting', function () {
        return Inertia::render('Admin/Setting', ['layout' => 'admin']);
    })->name('admin.setting'); // Ensure the route name is set

    Route::get('admin/blog-curd', function () {
        return Inertia::render('Admin/BlogCURD', ['layout' => 'admin']);
    })->name('admin.blogcurd');

    // In routes/web.php
   

    Route::post('/users/update', [UserController::class, 'update'])->middleware('auth');
    Route::get('/admin/setting', [DashboardController::class, 'index'])->name('admin.setting');

    Route::get('/admin/blog-curd', [BlogController::class, 'index'])->name('admin.blogcurd');
    
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');

    Route::put('/admin/blogs/{blog}', [BlogController::class, 'update']);
    Route::post('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');



    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Authentication routes
Route::get('/register', function () {
    return Inertia::render('Admin/Register', ['layout' => 'admin']);
})->name('register');

Route::get('/login', function () {
    return Inertia::render('Admin/Login', ['layout' => 'admin']);
})->name('login'); // Ensure the route name is set

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);
