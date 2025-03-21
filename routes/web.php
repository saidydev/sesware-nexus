<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeadminController;






Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::get('/product',[ProductController::class,'product'])->name('product');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');

Route::POST('/contact',[OrderController::class,'SendOrder'])->name('contact');


// Admin's

Route::get('/home',[HomeadminController::class,'index'])->name('homeadmin');





