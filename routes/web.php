<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  Frontend Routes
Route::get('/', fn() => view('Frontend.index'));
Route::get('/about', fn() => view('Frontend.about'));
Route::get('/courses', fn() => view('Frontend.courses'));
Route::get('/trainers', fn() => view('Frontend.trainers'));
Route::get('/events', fn() => view('Frontend.events'));
Route::get('/pricing', fn() => view('Frontend.pricing'));
Route::get('/contact', fn() => view('Frontend.contact'));
Route::get('/course-details', fn() => view('Frontend.course-details'));
Route::get('/dashboard', fn() => view('Backend.dashboard'));




Route::get('/filemanager', function () {
    return view('filemanager');
})->middleware(['auth', 'verified'])->name('filemanager');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
