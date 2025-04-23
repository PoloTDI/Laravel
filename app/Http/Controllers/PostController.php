<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all(); //select('*');
        // dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }
}
