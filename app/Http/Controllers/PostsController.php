<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return[
            'auth',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::paginate();

        return view('dashboard.create_contents', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
