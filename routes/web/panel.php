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
    Route::get("/ilanlar",[HomeController::class,"adverts"])->name('panel.adverts');
    Route::get("/ilan-ekle",[HomeController::class,"addadvert"])->name('panel.addadvert');
    Route::get("/ilan-sil",[HomeController::class,"deleteadvert"])->name('panel.deleteadvert');
    Route::get("/ilan-düzenleme",[HomeController::class,"updateadvert"])->name('panel.updateadvert');
    Route::get("/ilan-detay",[HomeController::class,"advertdetail"])->name('panel.advertdetail');
    Route::get("/teklifler",[HomeController::class,"proposal"])->name('panel.proposal');
    Route::get("/odeme",[HomeController::class,"payment"])->name('panel.payment');
    Route::get("/kart-bilgi",[HomeController::class,"cardinfo"])->name('panel.cardinfo');





    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('panel.logout');
});



