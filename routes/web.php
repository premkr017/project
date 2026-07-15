<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

require __DIR__ . '/qr.php';

Route::get('/test', [testController::class, 'welcome']);

Route::get('/', function () {
    return view('welcome');
});

