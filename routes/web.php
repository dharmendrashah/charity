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
    return view('index');
});
Route::get('index.html', function () {
    return view('index');
});
Route::get('about.html', function(){
    return view('about');
});

Route::get('services.html', function(){
    return view('services');
});

Route::get('causes.html', function(){
    return view('causes');
});

Route::get('blog.html', function(){
    return view('blog');
});

Route::get('contact.html',function(){
    return view('contact');
});
