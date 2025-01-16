<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

// Index Route
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');

// Wisata Route
Route::prefix('wisata')->group(function () {
    Route::get('/', [WisataController::class, 'index'])->name('wisata');
    Route::get('/{id}', [WisataController::class, 'showWisata'])->name('wisata.show'); // Updated to include {id}
});

// Event Controller
Route::prefix('event')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('event');
    Route::get('/{categoryId}', [EventController::class, 'showCategory'])->name('event.category');
    Route::get('/{categoryId}/{eventId}', [EventController::class, 'showEvent'])->name('event.show');
});