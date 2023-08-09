<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Auth::routes();

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('skills', [PageController::class, 'skills'])->name('skills');
Route::get('experience', [PageController::class, 'experience'])->name('experience');
Route::get('portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
