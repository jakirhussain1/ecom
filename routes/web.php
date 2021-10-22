<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'App\Http\Controllers\FrontendController@welcome');
Route::get('/about', 'App\Http\Controllers\FrontendController@about');
Route::get('/shop', 'App\Http\Controllers\FrontendController@shop');
Route::get('/blog', 'App\Http\Controllers\FrontendController@blog');
Route::get('/contact', 'App\Http\Controllers\FrontendController@contact');
Route::get('/cart', 'App\Http\Controllers\FrontendController@cart');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\BackendController@dashboard')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/add/product','App\Http\Controllers\ProductController@addproduct');
Route::middleware(['auth:sanctum', 'verified'])->post('/product/insert','App\Http\Controllers\ProductController@productinsert');