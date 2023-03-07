<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $post = new Post;
        $post->title = $validatedData['title'];
        $post->short_description = $validatedData['short_description'];
        $post->content = $validatedData['content'];
        $post->category_id = $validatedData['category_id'];
        $post->status = 'draft';
        $post->latitude = $validatedData['latitude']; // asignar el valor de latitude
        $post->longitude = $validatedData['longitude']; // asignar el valor de longitude
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->title = $validatedData['title'];
        $post->short_description = $validatedData['short_description'];
        $post->content = $validatedData['content'];
        $post->category_id = $validatedData['category_id'];
        $post->status = 'draft';
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
