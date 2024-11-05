<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/* ==================================================
                Authentication Routes
   ================================================== */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/* ==================================================
              Logout Routes w/ Middleware
   ================================================== */
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

/* ==================================================
              Product API Routes w/ Sanctum
   ================================================== */
Route::middleware('/auth:sanctum')->group(function () {
    Route::apiResource('/products', ProductController::class);
    Route::get('/products/search', [ProductController::class, 'searchByName']);
});
