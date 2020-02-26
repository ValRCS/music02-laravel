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
    return view('tracks');
});
