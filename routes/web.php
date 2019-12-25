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

Route::get('/post/{numero?}','Posts@getPost')
    ->where('numero','[0-9]+')
    ->name('post');

Route::view('/home','home',['name' => 'Example'])->name('home');

Route::get('/create_post','Posts@createPost')-> name('create_post');

Route::get('mis_posts', 'Posts@misPosts')->name('mis_posts');
