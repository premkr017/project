<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/test',[testController::class,'welcome']);