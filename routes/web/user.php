<?php

use App\Http\Controllers\Panel\AdvertController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BidController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MicroController;
use Illuminate\Support\Facades\Route;

Route::post('kayit-ol', [AuthController::class, 'register'])->name('user.register');
Route::post('giris-yap', [AuthController::class, 'login'])->name('user.login');

Route::middleware("userMiddleware")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.home');
    Route::get('/mikro-isler', [HomeController::class, 'microIndex'])->name('user.microIndex');
    Route::get('/ilan-detay/{id}', [HomeController::class, 'jobdetail'])->name('user.jobdetail');
    Route::get('/micro-is-detay/{id}', [HomeController::class, 'microdetail'])->name('user.microdetail');
    Route::get('/profil', [HomeController::class, 'profile'])->name('user.profile');
    Route::get('/mikro-is', [HomeController::class, 'microjob'])->name('user.microjob');
    Route::get('/gecmis-is', [HomeController::class, 'donejob'])->name('user.donejob');
    Route::get('/aktif-is', [HomeController::class, 'activejob'])->name('user.activejob');
    Route::get('/tekliflerim', [HomeController::class, 'bid'])->name('user.bid');
    Route::get('/mesajlarim', [HomeController::class, 'message'])->name('user.message');
    Route::get('/bakiye', [HomeController::class, 'wallet'])->name('user.wallet');

    Route::post('/teklif-ver/{advert}', [BidController::class, 'bidPost'])->name('user.bidPost');
    Route::post('/micro-teklif-ver/{advert}', [MicroController::class, 'microPost'])->name('user.microPost');

    Route::get('/hesaba-aktar/{id}', [HomeController::class, 'hesap'])->name('user.hesap');

    Route::get("/teslim-micro/{id}", [MicroController::class, "teslim"])->name("user.teslim");
    Route::post("/teslim-advert/{id}", [AdvertController::class, "teslim"])->name("user.teslimAdvert");


    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('user.logout');
});
