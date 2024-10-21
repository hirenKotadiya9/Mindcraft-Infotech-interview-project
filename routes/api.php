<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Existing route for user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// New route for creating a product
Route::post('/products', [ProductController::class, 'store']);
