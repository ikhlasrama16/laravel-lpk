<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('homepage.login');
Route::post('/loginprocess', [LoginController::class, 'login_process'])->name('loginprocess');

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/admin/user', [HomepageController::class, 'user'])->name('homepage.user');
Route::get('/admin/dashboard', [HomepageController::class, 'dashboard'])->name('homepage.dashboard');

