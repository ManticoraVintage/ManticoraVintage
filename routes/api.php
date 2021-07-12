<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\AdminController;


Route::get('/shop/manticora', [ShopController::class, 'getManticoraItems']);
Route::get('/shop/zozobra', [ShopController::class, 'getZozobraItems']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/types', [TypeController::class, 'index']);
Route::get('/shop/category/{categoryId}/type/{typeId}', [ShopController::class, 'showFilteredItems']);
Route::get('/shop/{itemId}', [ShopController::class, 'showOne']);

Route::post('/admin', [ShopController::class, 'store']);
Route::post('/admin/{id}', [ShopController::class, 'destroy']);

