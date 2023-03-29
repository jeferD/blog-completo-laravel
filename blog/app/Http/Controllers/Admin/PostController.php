<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all(); obtiene todos los datos que hay en la BD
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin.posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'color' => 'required',
        ]);

        $post = Post::create($request->all());

        
        // return view('admin.posts.edit', compact('post', 'colors'));
        return redirect()->route('admin.posts.index', $post, )->with('info','La etiqueta se creo con exito');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        
        return view('admin.posts.edit', compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:posts,slug,$post->id",
            'color'=> 'required'
        ]);
        
        $post -> update($request->all());

       
        return redirect()->route('admin.posts.edit', $post, )->with('info','La etiqueta se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('info','La etiqueta se elimino con exito');
    }
}
