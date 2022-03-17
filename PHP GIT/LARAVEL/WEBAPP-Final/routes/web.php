<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit', 'auto@edit');
Route::get('/delete', 'auto@delete');