<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;




Route::get('/',[IndexController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/products',[ProductsController::class, 'products']);
Route::get('/review',[ReviewController::class, 'review']);
Route::get('/contact',[ContactController::class, 'contact']);



