<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'list']);

Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/put', [CategoryController::class, 'put']);

Route::get('/categories/update/{category}', [CategoryController::class, 'update']);
Route::post('/categories/patch/{category}', [CategoryController::class, 'patch']);

Route::post('/categories/delete/{category}', [CategoryController::class, 'delete']);