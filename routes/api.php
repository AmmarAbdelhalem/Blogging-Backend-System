<?php

use App\Http\Controllers\v1\AuthController;
use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(ForceJsonResponse::class)->group(function () {
    Route::prefix('v1')->group(function () {
        Route::post('/register', [AuthController::class, 'register']);
    });
});
