<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;

Route::get('/', [EcommerceController::class, 'index'])
    ->name('ecommerce.index');

Route::get('/produk/{id}', [EcommerceController::class, 'show'])
    ->name('ecommerce.show');

Route::get('/tentang', function () {
    return view('ecommerce.tentang');
})->name('ecommerce.tentang');
