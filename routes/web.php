<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'login_process'])->name('loginprocess');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerprocess', [LoginController::class, 'register_process'])->name('registerprocess');

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/blog', [HomepageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomepageController::class, 'blog_detail'])->name('blog_detail');
Route::get('/tentang', [HomepageController::class, 'tentang'])->name('tentang');
Route::get('/info_karir', [HomepageController::class, 'program'])->name('program');
Route::get('/gallery', [HomepageController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [HomepageController::class, 'kontak'])->name('kontak');

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran/store', [PendaftaranController::class, 'store'])->name('pendaftaran.store');




Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [AdminController::class, 'user'])->name('user');

    Route::get('/add_user', [UserController::class, 'add_user'])->name('add_user');
    Route::post('/store', [UserController::class, 'store'])->name('store');

    Route::get('/user/edit/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::put('/user/update/{id}', [UserController::class, 'update_user'])->name('update_user');
    Route::delete('/user/delete/{id}', [UserController::class, 'delete_user'])->name('delete_user');


    Route::post('/post', [PostController::class, 'post'])->name('post');
    Route::post('/upload', [PostController::class, 'uploadImage'])->name('upload');
    Route::get('/add_blog', [PostController::class, 'add_blog'])->name('add_blog');
    Route::get('/blog/edit/{id}', [PostController::class, 'edit_blog'])->name('edit_blog');
    Route::put('/blog/update/{id}', [PostController::class, 'update_blog'])->name('update_blog');
    Route::delete('/blog/delete/{id}', [PostController::class, 'delete_blog'])->name('delete_blog');

    Route::get('/pendaftaran', [PendaftaranController::class, 'admin_pendaftaran'])->name('pendaftaran');
    Route::get('/add_pendaftaran', [PendaftaranController::class, 'create_pendaftaran'])->name('create_pendaftaran');
    Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit_pendaftaran'])->name('edit_pendaftaran');
    Route::put('/pendaftaran/edit/{id}/update', [PendaftaranController::class, 'update_pendaftaran'])->name('update_pendaftaran');
    Route::delete('/pendaftaran/delete/{id}', [PendaftaranController::class, 'delete_pendaftaran'])->name('delete_pendaftaran');

    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('create_testimoni');
    Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('store_testimoni');
    Route::get('/testimoni/edit/{id}', [TestimoniController::class, 'edit'])->name('edit_testimoni');
    Route::put('/testimoni/edit/{id}/update', [TestimoniController::class, 'update'])->name('update_testimoni');
    Route::delete('/testimoni/delete/{id}', [TestimoniController::class, 'destroy'])->name('delete_testimoni');

    Route::get('/gallery', [GalleryController::class , 'index'])->name('gallery');
    Route::get('/gallery/add', [GalleryController::class , 'create'])->name('add_gallery');
    Route::post('/gallery/upload', [GalleryController::class , 'upload'])->name('upload_gallery');
    Route::delete('/admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('delete_gallery');


    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/blog', [AdminController::class, 'blog'])->name('blog');

});




