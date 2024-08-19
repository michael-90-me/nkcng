<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/trial', function (Request $request) {
    dd('oi');
});

Route::post('/pay-loan', [PaymentController::class, 'loanPayment']);