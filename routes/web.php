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

Route::get('/about', function () {
    return "<h1>This is all about me!</h1>";
});

Route::get('/greet', function () {
    $myname = request('myname');
    // $myname = $_GET['myname']; //plain PHP would work but without error checking
    return "<h1>Hello $myname!</h1>";
});

Route::get('/tracks', function () {
    $myuser = request('myuser');

    return view('tracks', [
        "myusername" => $myuser,
        "favorite" => "Jumprava",
    ]);
});

//route for urls with type /wild/something
// plain /wild will not work here
Route::get('/wild/{par1}/{par2}', function ($post, $p2) {
    // return "<h1>Post $post</h1><p>Aha $p2</p>";
    return view('wild', [
        "mytitle" => $post,
        "mypar" => $p2,
    ]);
});

//for this route we will call
//show method
//which lives in PostsController (under app/Http/Controllers)
Route::get('/posts/{post}', 'PostsController@show');
