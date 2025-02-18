<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register']);



Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::apiResource('/products', ProductController::class)->middleware('is_admin:admin');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
