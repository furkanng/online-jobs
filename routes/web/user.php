<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::post('kayit-ol', [AuthController::class, 'register'])->name('user.register');
Route::post('giris-yap', [AuthController::class, 'login'])->name('user.login');

Route::middleware("userMiddleware")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.home');
    Route::get('/ilan-detay/{id}', [HomeController::class, 'jobdetail'])->name('user.jobdetail');
    Route::get('/profil', [HomeController::class, 'profile'])->name('user.profile');
    Route::get('/mikro-is', [HomeController::class, 'microjob'])->name('user.microjob');
    Route::get('/gecmis-is', [HomeController::class, 'donejob'])->name('user.donejob');
    Route::get('/aktif-is', [HomeController::class, 'activejob'])->name('user.activejob');
    Route::get('/tekliflerim', [HomeController::class, 'bid'])->name('user.bid');
    Route::get('/mesajlarim', [HomeController::class, 'message'])->name('user.message');
    Route::get('/cüzdan', [HomeController::class, 'wallet'])->name('user.wallet');

    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('user.logout');
});
