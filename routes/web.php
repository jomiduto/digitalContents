<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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
Route::get('/{user:username}/posts', [PostController::class, 'index'])->name('post.index');

// Route User Controller
Route::get('/users', [UserController::class, 'index'])->name('users');
