<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    
    $data = [
        'comics' => $comics
    ];
    
    return view('home', $data);
})->name('homepage');



Route::get('/comics/{id}', function ($id) {

    $comics_array = config('comics');
    $comic_to_show = false;

    foreach($comics_array as $comic){
        if($comic['id'] == $id){
            $comic_to_show = $comic;
        }
    }

    if(!$comic_to_show) {
        abort('404');
    }

    $data = [
        'comic_info' => $comic_to_show,
    ];

    return view('comics', $data);
})->name('comics');


Route::get('/news', function () {
    return view('news');
})->name('news');