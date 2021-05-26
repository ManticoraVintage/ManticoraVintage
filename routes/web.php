<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Returns the user authenticated if authentication was successful
Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Admin', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');

//If the input is a link starting with anything but 'api' return the main view.
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
