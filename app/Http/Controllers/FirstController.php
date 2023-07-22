<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function first() {
        $post = DB::select('select * from posts where id = :id', ['id' => 1]);
        foreach ($post as $posts) {
            dump($posts);
        }
        dd('end');
    }
}
