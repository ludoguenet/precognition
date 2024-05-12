<?php

use App\Http\Controllers\StoreUserController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users/store', StoreUserController::class)->middleware([HandlePrecognitiveRequests::class]);
