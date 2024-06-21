<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/home', function () {
    return view('home');
});
// Route::get('/registration', function () {
//     return view('login.registration');
// });
Route::get('/login', function () {
    return view('login.auth');
});
Route::get('/logout', function () {
    return view('main');
});

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::resource('posts', PostController::class)->only([
    'create', 'store', 'show', 'edit', 'update', 'destroy'
]);

Route::controller(RegistrationController::class)->group(function () {
    Route::get('/registration','index')->name('reg.form');
    Route::post('/registration','register')->name('reg.reg');
});
