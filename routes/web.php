<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContacttController;





Route::get('/',[IndexController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/products',[ProductsController::class, 'products']);
Route::get('/review',[ReviewController::class, 'review']);
Route::get('/contact',[ContactController::class, 'contact']);

Route::resource('/contact', ContacttController::class);




Auth::routes();
//Route::resource('/contact', ContacttController::class);

Route::get('/contact',[ContacttController::class,'index'])->name('contact');

//Route::post('/contact', [ContacttController::class, 'store'])->name('contact.store');

//Route::post('/students', [App\Http\Controllers\StudenttController::class, 'store']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
