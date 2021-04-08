<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShopController;


Route::get('/shop', [ShopController::class, 'index']);

Route::post('/admin/{id}', [ShopController::class, 'destroy']);
