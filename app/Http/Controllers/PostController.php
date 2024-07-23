<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }
}
