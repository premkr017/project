<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/qr-generator', [QrController::class, 'index'])->name('qr.index');
Route::redirect('/qr-generater', '/qr-generator');

Route::post('/qr-generator', [QrController::class, 'generate'])->name('qr.generate');
Route::post('/qr-generater', [QrController::class, 'generate']);
