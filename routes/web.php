<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::post('/create', [NoteController::class, 'store'])->name('note.create');

Route::delete('/create/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
