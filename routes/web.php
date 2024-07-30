<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/ar', [App\Http\Controllers\HomeController::class, 'ar']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'pageView']);
Route::get('/ar/{any}', [App\Http\Controllers\HomeController::class, 'arPageView']);

Route::post('/contact', [App\Http\Controllers\ContactFormController::class, 'submit'])->name('contact.submit');

Route::post('/apply', [App\Http\Controllers\ApplyFormController::class, 'submit'])->name('apply.submit');