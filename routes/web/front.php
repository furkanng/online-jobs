<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get("/login-ol", [HomeController::class, "login"])->name("front.login");
Route::get('/kayit-ol', [HomeController::class, 'register'])->name('front.register');
Route::get('/is-ara', [HomeController::class, 'job'])->name('front.job');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/admin-login-ol', [HomeController::class, 'adminlogin'])->name('panel.adminlogin');
