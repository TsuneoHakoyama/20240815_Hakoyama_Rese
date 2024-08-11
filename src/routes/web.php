<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopController;
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
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'destroy']);
    Route::get('/', [ShopController::class, 'show'])->name('shop-all');
    Route::post('/search', [ShopController::class, 'search']);
    Route::get('/detail', [ShopController::class, 'showDetail']);
    Route::post('/favorite', [FavoriteController::class, 'store']);
    Route::delete('/delete-favorite', [FavoriteController::class, 'favoriteDestroy']);
    Route::post('/confirm', [ReservationController::class, 'confirm']);
    Route::post('/reservation', [ReservationController::class, 'reservation']);
    Route::delete('/reservation-cancel', [MyPageController::class, 'cancel']);
    Route::post('/', [ShopController::class, 'show'])->name('back-home');
    Route::get('/mypage', [MyPageController::class, 'show'])->name('mypage');
    Route::delete('/delete-mypage', [MyPageController::class, 'destroy']);

});

