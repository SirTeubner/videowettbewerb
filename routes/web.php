<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-pages.home');
});

Route::controller(\App\Http\Controllers\PageController::class)->group(function(){
    Route::get('/ueberuns', 'ueberuns')->name('ueberuns');
    Route::get('/gewinne', 'gewinne')->name('gewinne');
    Route::get('/home', 'home')->name('home');
    Route::get('/partner', 'partner')->name('partner');
    Route::get('/teilnahme', 'teilnahme')->name('teilnahme');
    Route::get('/einreichen', 'einreichen')->name('einreichen');
    Route::get('/impressum', 'impressum')->name('impressum');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
