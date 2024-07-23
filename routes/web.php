<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

// Route Post controller
Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
