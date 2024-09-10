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
        // $posts = Posts::paginate();
        $posts = Posts::orderBy('id', 'DESC')->get();

        return view('dashboard.create_contents', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.create_posts');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        //Validación de campos
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'author' => 'required|min:4|max:100',
            'url' => 'required|min:10|max:100',
            'content' => 'required|min:10'
        ]);

        Posts::create([
            'title' => $request->title,
            'author' => $request->author,
            'url' => $request->url,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');
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
