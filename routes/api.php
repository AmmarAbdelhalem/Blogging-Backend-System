<?php

use App\Http\Controllers\v1\AuthController;
use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(ForceJsonResponse::class)->group(function () {
//     Route::prefix('v1')->group(function () {
//         Route::post('/register', [AuthController::class, 'register']);
//         Route::post('/login', [AuthController::class, 'login']);

//         Route::middleware("auth:sanctum")->group(function () {
//             Route::get('/me', [AuthController::class, 'me']);
//         });
//     });
// });

Route::prefix("v1")->group(function () {
    Route::middleware(ForceJsonResponse::class)->group(function () {
        Route::post("/register", [AuthController::class,"register"]);
        Route::post("/login", [AuthController::class,"login"]);

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/me', [AuthController::class,'me']);
            Route::get('/logout', [AuthController::class,'logout']);
        });
    });
});
