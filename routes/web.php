<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SourceNoteController;

/*
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/


Route::get('/dashboard', function () {
    return redirect('/'); // Redirect to the shared notes page
})->middleware(['auth'])->name('dashboard');


Route::get('/', [SourceNoteController::class, 'index'])->name('notes.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/share', [SourceNoteController::class, 'create'])->name('notes.create');
    Route::post('/share', [SourceNoteController::class, 'store'])->name('notes.store');
    Route::delete('/notes/{id}', [SourceNoteController::class, 'destroy'])->name('notes.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';

