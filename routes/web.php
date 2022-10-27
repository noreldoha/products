<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;


Route::resource('products',SearchController::class);


Route::get('/search', [SearchController::class, 'search'])->name('products.search');
Route::get('/', [HomeController::class, 'index'])->name('home.index');




