<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;





Auth::routes();

Route::get('/', [LinkController::class, 'index'])->name('index');
