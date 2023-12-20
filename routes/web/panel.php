<?php

use App\Http\Controllers\Panel\ArchiveController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\TenderController;
use App\Http\Controllers\Panel\TenderImagesController;
use Illuminate\Support\Facades\Route;

Route::post('giris-yap', [AuthController::class, 'login'])->name('panel.login');
Route::get('giris-yap', [HomeController::class, 'loginGet'])->name('panel.login.get');

Route::middleware("adminMiddleware")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('panel.home');

    Route::get("/ilanlarim",[HomeController::class,""])




    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('panel.logout');
});



