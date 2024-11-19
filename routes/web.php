<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cv-kreatif', [CVController::class, 'creative']);
Route::get('/cv-ats', [CVController::class, 'ats']);
Route::get('/testimoni', [TestimoniController::class, 'index']);
Route::post('/testimoni/check-access', [TestimoniController::class, 'checkAccess']);
Route::post('/testimoni', [TestimoniController::class, 'storeTestimoni']);
