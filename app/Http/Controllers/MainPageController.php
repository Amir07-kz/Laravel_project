<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\DB;
use function Termwind\render;
use App\Models\Post;

class MainPageController
{
    public function create() {
        Post::create([
            'title' => 'Test content from function',
            'content' => 'CONTENT created from function',
            'image' => 'IMAGE created from function',
            'likes' => 50,
            'is_published' => 1,
            'created_at' => time(),
            'updated_at' => null
        ]);

        echo('Post created!');
    }
    public function main() {
//        $post = DB::select('select * from posts where id = :id', ['id' => 1]);

        $post = Post::all();
        $postsArray  = [];

        foreach ($post as $posts) {
            $postsArray[] = $posts;

            return view('main', [
                'post' => $post,
            ]);
        }
    }
}