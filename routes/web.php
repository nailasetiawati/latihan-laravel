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


// Route::get('/', function () {
//     return "Hello World!";
// });
// Route::get('/eror', function () {
//     return "Ini halaman error";
   
    
// });

Route::get('/', function () {
    $title = "Home";
    return view ("contents.home.index", compact('title'));    
});

Route::get('/blog', function () {
    $title = "Blog";
    return view ("contents.blog.index", compact('title'));    
});

Route::get('/about', function () {
    $title = "About";
    return view ("contents.about.index", compact('title'));    
});



