<?php

use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [UrlController::class, 'shorten'])->name('url.shorten');
Route::get('/{url}', [UrlController::class, 'redirect'])->name('url.redirect');

