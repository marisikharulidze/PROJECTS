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
    return view('menu');
});

Route::get('/routt', function () {
    $arr = ['name'=>'mari','age'=>'20'];
    return $arr;
    return "heyy shit";
});

Route::get('/text', function () {
    return view('text');
})->name('text');

Route::get('/category', function () {
    return view('category');
})->name('category');