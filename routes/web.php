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

use App\Post;

Route::get('/', 'SlidersController@index')->name('welcome');

Route::get('/blog', function () {
    $posts = Post::with('category')->get();
    return view('blog', compact('posts'));
});

Route::get('/blog/{slug}', function ($slug) {
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
