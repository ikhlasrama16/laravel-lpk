<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/admin/user', [HomepageController::class, 'user'])->name('homepage.user');
Route::get('/admin/dashboard', [HomepageController::class, 'dashboard'])->name('homepage.dashboard');

