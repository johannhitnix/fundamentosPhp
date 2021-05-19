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


Route::get('/', function () {
    
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// User Controller
Route::get('configuration', 'UserController@config')->name('config');
Route::post('user/update', 'UserController@update')->name('user.update');
Route::get('user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');

// Image Controller
Route::get('upload-image', 'ImageController@create')->name('image.upload');
Route::post('image/save', 'ImageController@save')->name('image.save');
Route::get('image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('imagen/{id}', 'ImageController@detail')->name('image.detail');

// Comment Controller
Route::post('comment/save', 'CommentController@save')->name('comment.save');
Route::get('comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

// Like Cotroller
Route::get('like/{img}', 'LikeController@like')->name('like.save');
Route::get('dislike/{img}', 'LikeController@dislike')->name('like.delete');
Route::get('liked', 'LikeController@index')->name('liked');