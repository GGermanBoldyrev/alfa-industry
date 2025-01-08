<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
/*Route::get('/gallery', [HomeController::class, 'index'])->name('gallery');*/
Route::get('/order', [HomeController::class, 'index'])->name('order');

// Новости
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Заказ
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order', [OrderController::class, 'submitForm'])->name('order.submit');

// Каталог
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/{slug}', [CatalogController::class, 'show'])->name('catalog.category');

// Каталог брендов
Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');

// Каталог товаро
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');
Route::get('/products/filter', [ProductsController::class, 'filter'])->name('products.filter');

// Контакты
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
