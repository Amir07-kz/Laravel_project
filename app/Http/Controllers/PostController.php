<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {

        $post = Post::create([
            'title' => 'Test content from function',
            'content' => 'CONTENT created from function',
            'image' => 'IMAGE created from function',
            'likes' => 50,
            'is_published' => 1,
            'created_at' => time(),
            'updated_at' => null
        ]);

        echo('post created');

        return view('create', [
            'post' => $post
        ]);
    }
}
