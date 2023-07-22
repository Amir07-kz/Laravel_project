<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FirstController;
use function Termwind\render;
use App\Models\Post;

class MainPageController
{
    public function main()
    {
//        $post = DB::select('select * from posts where id = :id', ['id' => 1]);
//        foreach ($post as $posts) {
//            dump($posts);
//        }
        $post = Post::all();

        return view('main', [
            'post' => $post,
        ]);
    }
}