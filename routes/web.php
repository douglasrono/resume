<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



Route::get('/',[PagesController::class, 'index'])->name('index');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
