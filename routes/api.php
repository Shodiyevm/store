<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/products', \App\Http\Controllers\ProductController::class );
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
