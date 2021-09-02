<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::resource('/books', BookController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


