<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FirstController;
use function Termwind\render;

class MainPageController
{
    public function main() {
//        return redirect()->action('\App\Http\Controllers\FirstController@first');
        render();
    }
}