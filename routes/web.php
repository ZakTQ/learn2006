<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/registration', function () {
    return view('login.registration');
});
Route::get('/login', function () {
    return view('login.auth');
});
Route::get('/logout', function () {
    return view('main');
});

// Route::controller(PostController::class)->group(function(){
//     Route::get();
// });

Route::resource('posts',PostController::class);