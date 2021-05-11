<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TypeController;


Route::get('/shop', [ShopController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/types', [TypeController::class, 'index']);
Route::get('/shop/category/{categoryId}/type/{typeId}', [ShopController::class, 'show']);
Route::get('/shop/{itemId}', [ShopController::class, 'showOne']);

Route::post('/admin/{id}', [ShopController::class, 'destroy']);
