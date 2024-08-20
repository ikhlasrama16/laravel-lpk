<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'login_process'])->name('loginprocess');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerprocess', [LoginController::class, 'register_process'])->name('registerprocess');


Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/user', [HomepageController::class, 'user'])->name('user');
    Route::get('/add_user', [AdminController::class, 'add_user'])->name('add_user');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/dashboard', [HomepageController::class, 'dashboard'])->name('dashboard');
    Route::get('/blog', [HomepageController::class, 'blog'])->name('blog');
});




