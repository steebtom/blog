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

Route::get('/home', 'HomeController@index')->name('home');


Route::name('blogs_path')->get('/blogs', 'Blogs@index');

Route::name('create_blogs_path')->get('/blogs/create', 'Blogs@create');

Route::name('store_blogs_path')->post('/blogs/', 'Blogs@store');
