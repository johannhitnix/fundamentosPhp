<?php

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

use App\Image;

Route::get('/', function () {

    $images = Image::all();
    foreach ($images as $img) {
        echo "{$img->image_path} <br>";
        echo "{$img->description} <br>";
        echo "{$img->user->name} {$img->user->surname}<br>";
        
        if(count($img->comments) > 0){
            echo"<strong>Comments</strong><br>";
            foreach ($img->comments as $comment) {
                echo "<span style='color: #0e4bef;'>{$comment->user->name} {$comment->user->surname}: </span>";
                echo "{$comment->content} <br>";
            }
        }

        echo 'LIKES: ' . count($img->likes);
        echo "<hr>";
    }
    die();
    return view('welcome');
});
