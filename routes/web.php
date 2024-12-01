<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/catalog', [HomeController::class, 'index'])->name('catalog');
Route::get('/gallery', [HomeController::class, 'index'])->name('gallery');
Route::get('/news', [HomeController::class, 'index'])->name('news');
Route::get('/contacts', [HomeController::class, 'index'])->name('contacts');
Route::get('/order', [HomeController::class, 'index'])->name('order');
