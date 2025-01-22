<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
//get requests
Route::get('products', [ProductController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);

Route::post('categories', [CategoryController::class, 'create']);


