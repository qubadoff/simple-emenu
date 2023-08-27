<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Front\GeneralController::class, 'index'])->name('index');
Route::get('/brend', [\App\Http\Controllers\Front\GeneralController::class, 'brend'])->name('brend');

Route::get('/categories', [\App\Http\Controllers\Front\GeneralController::class, 'categories'])->name('categories');
Route::get('/cat/{id}', [\App\Http\Controllers\Front\GeneralController::class, 'singleCat'])->name('singleCat');
