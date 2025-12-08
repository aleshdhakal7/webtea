<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController as Files;

// Frontend routes
Route::get('/', fn() => view('Frontend.index'));
Route::get('/about', fn() => view('Frontend.about'));
// … other frontend routes …

// File CRUD routes
Route::resource('files', Files::class);
