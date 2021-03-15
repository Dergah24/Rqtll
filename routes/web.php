<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GaleryConroller;
use App\Http\Controllers\Admin\PartnersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Front\MainController;



Route::get('/',[MainController::class,'index'])->name('main.index');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');


})->name('dashboard');

Route::group(["middleware" => ["auth"], "prefix" => "admin"], function() {

    Route::resource('slider',SliderController::class);
    Route::resource('product',ProductController::class);
    Route::resource('partner',PartnersController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('galery',GaleryConroller::class);
   });

