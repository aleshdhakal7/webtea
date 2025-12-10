<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController as Files;

// Frontend routes
Route::get('/', fn() => view('Frontend.index'));
Route::get('/about', fn() => view('Frontend.about'));
Route::get('/contact', fn() => view('Frontend.contact'));
Route::get('/courses', fn() => view('Frontend.courses'));
Route::get('/course-details', fn() => view('Frontend.course-details'));
Route::get('/pricing', fn() => view('Frontend.pricing'));
Route::get('/starter-page', fn() => view('Frontend.starter-page'));
Route::get('/trainers', fn() => view('Frontend.trainers'));




// … other frontend routes …

// File CRUD routes
Route::resource('files', Files::class);
