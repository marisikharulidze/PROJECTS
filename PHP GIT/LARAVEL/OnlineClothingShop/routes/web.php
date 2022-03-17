<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/signin', function () {
//     return view('signin');
// })->name('signin');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/profileicon', function () {
//     return view('profileicon');
// })->name('profileicon');


Route::get('/signin', 'Controller@signin');
Route::get('/register', 'Controller@register');
Route::get('/profile', 'Controller@profile');
Route::get('/dresses', 'Controller@dresses');


