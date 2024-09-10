<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return[
            'auth',
        ];
    }

    public function index(User $user)
    {
        $posts = Posts::orderBy('id', 'DESC')->get();

        return view('dashboard', [
            'user' => $user,
        ], compact('posts'));
    }
}
