<?php

use App\Http\Controllers\Panel\AdvertController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\MicroJobController;
use Illuminate\Support\Facades\Route;

Route::post('giris-yap', [AuthController::class, 'login'])->name('panel.login');
Route::get('giris-yap', [HomeController::class, 'loginGet'])->name('panel.login.get');

Route::middleware("adminMiddleware")->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('panel.home');
    Route::resource("ilanlar", AdvertController::class)->parameters(["ilanlar" => "id"])->names([
        'index' => 'panel.ilanlar.index',
        'edit' => 'panel.ilanlar.edit',
        'create' => 'panel.ilanlar.create',
        'store' => 'panel.ilanlar.store',
        'update' => 'panel.ilanlar.update',
        'destroy' => 'panel.ilanlar.destroy',
    ]);
    Route::resource("mikro-is", MicroJobController::class)->parameters(["mikro-is" => "id"])->names([
        'index' => 'panel.mikro-is.index',
        'edit' => 'panel.mikro-is.edit',
        'create' => 'panel.mikro-is.create',
        'store' => 'panel.mikro-is.store',
        'update' => 'panel.mikro-is.update',
        'destroy' => 'panel.mikro-is.destroy',
    ]);
    Route::get("/ilan-teklif", [HomeController::class, "proposal"])->name('panel.proposal');
    Route::get("/kart-bilgi", [HomeController::class, "cardinfo"])->name('panel.cardinfo');
    Route::get("/gecmis-odemeler", [HomeController::class, "txhistory"])->name('panel.txhistory');

    Route::get("/mikro-is-teklif", [HomeController::class, "microproposal"])->name('panel.microproposal');

    Route::get("/mikro-is-onay/{id}", [MicroJobController::class, "microjobOnay"])->name('panel.microjobOnay');
    Route::get("/ilan-onay/{id}", [AdvertController::class, "advertjobOnay"])->name('panel.advertjobOnay');

    Route::post("/para-yukle", [HomeController::class, "paraYukle"])->name('panel.paraYukle');

    Route::get("/odeme-yap/{id}", [AdvertController::class, "odemeyap"])->name("user.odemeyap");


    Route::get('cikis-yap', [AuthController::class, 'logout'])->name('panel.logout');
});



