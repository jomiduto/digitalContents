<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class UserController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return[
            'auth',
        ];
    }

    public function index()
    {
        return view('dashboard.users');
    }
}
