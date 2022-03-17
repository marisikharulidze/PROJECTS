<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;


// Route::resource('/auto', AutoController::class);
Route::get('/',[ AutoController::class, 'index' ]);
Route::get('/',[ AutoController::class, 'store' ]);
// Route::get('/show',[ AutoController::class, 'show' ]);
// Route::get('/create',[ AutoController::class, 'create' ]);
// Route::get('/edit',[ AutoController::class, 'edit' ]);
// Route::get('/',[ AutoController::class, 'update' ]);
// Route::get('/',[ AutoController::class, 'destroy' ]);s
// Route::resource('/auto', 'App\Http\Controllers\AutoController');
// Route::get('/auto', 'AutoController@index');