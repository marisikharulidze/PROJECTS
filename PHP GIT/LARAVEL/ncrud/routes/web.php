<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[PostsController::class,'index']);

Route::get('/posts/create',[PostsController::class,'create']);
Route::post('/posts',[PostsController::class,'store']);

Route::get('/posts/{post}/edit',[PostsController::class,'edit']);
Route::put('/posts/{post}',[PostsController::class,'update']);
Route::get('/editt',[PostsController::class,'editt']);

Route::delete('/posts/{post}/delete',[PostsController::class,'destroy']);
Route::get('/delette',[PostsController::class,'delette']);
Route::get('/delete',[PostsController::class,'delete']);

Route::get('/search',[PostsController::class,'search']);

Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);