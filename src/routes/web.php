<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/email/verify', function () {
  return view('auth.verify-email');
  })->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();
  return redirect('/');
  })->middleware(['auth', 'signed'])->name('verification.verify');

  Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  return back()->with('message', 'Verification link sent!');
  })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/logout', [AuthController::class, 'destroy']);
    Route::get('/', [ShopController::class, 'show'])->name('shop-all');
    Route::post('/search', [ShopController::class, 'search']);
    Route::get('/detail/{id}', [ShopController::class, 'showDetail'])->name('detail');
    Route::post('/favorite', [FavoriteController::class, 'store']);
    Route::delete('/delete-favorite', [FavoriteController::class, 'favoriteDestroy']);
    Route::post('/confirm', [ReservationController::class, 'confirm']);
    Route::post('/reservation', [ReservationController::class, 'reservation']);
    Route::delete('/cancel', [ReservationController::class, 'cancel']);
    Route::post('/', [ShopController::class, 'show'])->name('back-home');
    Route::get('/mypage', [MyPageController::class, 'show'])->name('mypage');
    Route::delete('/delete', [MyPageController::class, 'destroy']);

});
