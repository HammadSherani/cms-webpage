<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\CommonController;




Route::get('/{marketerId}/order-complete', [CommonController::class, 'orderComplete']);
Route::get('/{marketerId}', [CommonController::class, 'index']);
Route::get('/{marketerId}/productDetail/{id}', [CommonController::class, 'productDetail'])->name("productDetail");
Route::get('/{marketerId}/buy-form/{id}', [CommonController::class, 'buyForm'])->name("buy-form");
Route::post('/make-order', [CommonController::class, 'makeOrder']);
Route::get('/{marketerId}/products', [CommonController::class, 'product'])->name("products");
Route::get('/', [CommonController::class, 'welcome'])->name("welcome");
Route::get('/confirmation', [CommonController::class, 'confirmation'])->name("confirmation");
