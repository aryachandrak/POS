<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'home']);

Route::prefix('category')->group(function() {
    Route::get('/{produk?}', [ProdukController::class, 'produk']);
});

Route::get('/user/{id?}/name/{name?}', [UserController::class, 'user']);

Route::get('/penjualan', [PenjualanController::class, 'penjualan']);