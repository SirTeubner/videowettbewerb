<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-pages.home');
});

Route::get('/ueberuns', function(){
    return view('main-pages.ueberuns');
})->name('ueberuns');

Route::get('/gewinne', function(){
    return view('main-pages.gewinne');
})->name('gewinne');

Route::get('/home', function(){
    return view('main-pages.home');
})->name('home');

Route::get('/partner', function(){
    return view('main-pages.partner');
})->name('partner');

Route::get('/teilnahme', function(){
    return view('main-pages.teilnahme');
})->name('teilnahme');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
