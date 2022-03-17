<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Models\House;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[HouseController::class,'index']);