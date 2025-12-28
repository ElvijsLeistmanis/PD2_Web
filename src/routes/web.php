<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'list']);