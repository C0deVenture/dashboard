<?php

use App\Http\Controllers\ButtonController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buttons/{button}', [ButtonController::class, 'edit'])->name('button.edit');
Route::patch('/buttons/{button}', [ButtonController::class, 'update'])->name('button.update');
