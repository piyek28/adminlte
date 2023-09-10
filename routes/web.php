<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/suratmasuk', [App\Http\Controllers\HomeController::class, 'masuk'])->name('suratmasuk');
Route::get('/suratkeluar', [App\Http\Controllers\HomeController::class, 'keluar'])->name('suratkeluar');
Route::get('/tampilan', [App\Http\Controllers\HomeController::class, 'tampilan'])->name('tampilan');

Auth::routes();
