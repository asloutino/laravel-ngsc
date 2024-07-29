<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'pageView']);

Route::post('/contact', [App\Http\Controllers\ContactFormController::class, 'submit'])->name('contact.submit');

Route::post('/apply', [App\Http\Controllers\ApplyFormController::class, 'submit'])->name('apply.submit');