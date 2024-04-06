<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');


Route::post('/create', [NoteController::class, 'store'])->name('note.create');
Route::delete('/create/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');