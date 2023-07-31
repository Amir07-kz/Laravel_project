<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('//', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\MainPageController@main');

Route::get('/first', 'App\Http\Controllers\FirstController@first');

Route::get('/second', 'App\Http\Controllers\PostController@second');

Route::get('/read', 'App\Http\Controllers\ReadPageController@read');

Route::get('/create', 'App\Http\Controllers\PostController@create');

Route::post('/create/post', function () {
    return 'okay';
});