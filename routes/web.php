<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('principal');
});

// Route register controller
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Route login controller
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// Route logout controller
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Route Dashboard Controller
Route::get('/{user:username}', [DashboardController::class, 'index'])->name('dashboard.index');

// Route Post Controller
Route::controller(PostsController::class)->group(function () {
    Route::get('posts/index', [PostsController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('posts/store', [PostsController::class, 'store'])->name('posts.store');
});
