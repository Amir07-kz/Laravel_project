<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Termwind\render;

class FirstController extends Controller
{
    public function first() {
        $post = DB::select('select * from posts where id = :id', ['id' => 1]);
        foreach ($post as $posts) {
            dump($post);
        }

        return $this->render('resources/views/main.twig', [
            'posts' => $posts,
        ]);
    }
}
