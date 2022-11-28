<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PoetryController;
use Illuminate\Support\Facades\Route;

//Navigations
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/noticias', [NoticeController::class, 'show'])->name('notice');

Route::get('/poesias', [PoetryController::class, 'show'])->name('poetry');

Route::get('/artistas', [ArtistController::class, 'show'])->name('artist');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/cadastro', [LoginController::class, 'register'])->name('register');

Route::post('/cadastro', [LoginController::class, 'signup'])->name('signup');
//ADMIN
