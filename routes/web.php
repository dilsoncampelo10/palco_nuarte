<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PoetryController;
use Illuminate\Support\Facades\Route;

//Navigations
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/noticias', [NoticeController::class, 'show'])->name('notice');

Route::get('/poesias', [PoetryController::class, 'show'])->name('poetry');
