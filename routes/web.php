<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/catalog', [HomeController::class, 'index'])->name('catalog');
Route::get('/gallery', [HomeController::class, 'index'])->name('gallery');
Route::get('/contacts', [HomeController::class, 'index'])->name('contacts');
Route::get('/order', [HomeController::class, 'index'])->name('order');

// Новости
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
