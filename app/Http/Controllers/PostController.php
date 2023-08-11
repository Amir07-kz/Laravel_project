<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function Termwind\render;

class PostController extends Controller
{
    public function redirect() {
        return view('create');
    }
    public function create(Request $request) {

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->likes = 1;
        $post->is_published = 1;
        $post->save();

        echo('post created'); // make output by js

        return view('main');
    }

    public function read() {

        $post = Post::paginate(10);
        $postsArray = [];

        foreach ($post as $posts) {
            $postsArray[] = $posts;
        }
        dump($postsArray);
        return view('main', [
            'post' => $post,
        ]);
    }
}
