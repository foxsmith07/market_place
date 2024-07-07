<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'home'])->name('home');

Route::get('/announce/{announce}',[AnnounceController::class, 'show'])->name('show');

Route::middleware(['auth'])->group(function(){
    
    Route::get('/insert-announce',[AnnounceController::class, 'create'])->name('create');
    Route::post('/store-announce',[AnnounceController::class, 'store'])->name('store');

    Route::get('/cart', [PublicController::class, 'cart'])->name('cart');
});
