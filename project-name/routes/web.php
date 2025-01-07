<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/{marketerId}/order-complete', [WebController::class, 'orderComplete']);
Route::get('/{marketerId}', [WebController::class, 'index']);
Route::get('/{marketerId}/productDetail/{id}', [WebController::class, 'productDetail'])->name("productDetail");
Route::get('/{marketerId}/buy-form/{id}', [WebController::class, 'buyForm'])->name("buy-form");
Route::post('/make-order', [WebController::class, 'makeOrder']);
Route::get('/{marketerId}/products', [WebController::class, 'product'])->name("products");
Route::get('/', [WebController::class, 'welcome'])->name("welcome");
Route::get('/confirmation', [WebController::class, 'confirmation'])->name("confirmation");
