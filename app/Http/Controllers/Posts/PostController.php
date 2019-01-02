<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{    
    public function index()
    {
    	$posts = Post::with('comments')->paginate();

    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with(['comments.user', 'user'])->find($id);
            
        return view('posts.show', compact('post'));
    }   	
}

