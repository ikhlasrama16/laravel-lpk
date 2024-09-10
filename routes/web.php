<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'login_process'])->name('loginprocess');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerprocess', [LoginController::class, 'register_process'])->name('registerprocess');


Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

Route::get('/blog', [HomepageController::class, 'blog'])->name('blog');


Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/user', [AdminController::class, 'user'])->name('user');

    Route::get('/add_user', [UserController::class, 'add_user'])->name('add_user');
    Route::post('/store', [UserController::class, 'store'])->name('store');

    Route::get('/edit/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::put('/update/{id}', [UserController::class, 'update_user'])->name('update_user');
    Route::delete('/delete/{id}', [UserController::class, 'delete_user'])->name('delete_user');


    Route::post('/post', [PostController::class, 'post'])->name('post');
    Route::get('/add_blog', [PostController::class, 'add_blog'])->name('add_blog');


    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/blog', [AdminController::class, 'blog'])->name('blog');

});




