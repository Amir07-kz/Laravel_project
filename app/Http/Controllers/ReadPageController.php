<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ReadPageController
{
    public function read() {
        $post = Post::all();
        $postsArray = [];

        foreach ($post as $posts) {
            $postsArray[] = $posts;

            return view('main', [
                'post' => $posts,
            ]);
        }
    }
}