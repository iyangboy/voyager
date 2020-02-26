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

use App\Models\Blog;

Route::get('/', function () {
    $blog = Blog::first();
    return view('welcome', compact('blog'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
