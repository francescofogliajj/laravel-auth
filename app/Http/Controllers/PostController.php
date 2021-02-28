<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        // if (Auth::check()) {

        // }

        return view('guests.posts.index', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('guests.posts.show', compact('post'));
    }
}
