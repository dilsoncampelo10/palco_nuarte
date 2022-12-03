<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PoetryController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

//Navigations
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/noticias', [NoticeController::class, 'show'])->name('notice');

Route::get('/poesias', [PoetryController::class, 'show'])->name('poetry');

Route::get('/artistas', [ArtistController::class, 'show'])->name('artist');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('signin');

Route::get('/cadastro', [LoginController::class, 'register'])->name('register');

Route::post('/cadastro', [LoginController::class, 'signup'])->name('signup');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/projeto', [ProjectController::class, 'index'])->name('project')->middleware('auth');

Route::post('/projeto', [ProjectController::class, 'store'])->name('insert.project');

//ADMIN

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('admin');

Route::post('/admin/categoria', [ProjectController::class, 'category'])->name('insert.category');

Route::get('/admin/noticia', [AdminController::class, 'notice'])->name('admin.notice')->middleware('admin');
Route::post('/admin/noticia', [NoticeController::class, 'store'])->name('insert.notice');

Route::get('/admin/artista', [AdminController::class, 'artist'])->name('admin.artist')->middleware('admin');
Route::post('/admin/artista', [ArtistController::class, 'store'])->name('insert.artist');

Route::get('/admin/galeria', [AdminController::class, 'gallery'])->name('admin.gallery')->middleware('admin');
