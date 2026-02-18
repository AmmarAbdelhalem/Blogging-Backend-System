<?php

use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(ForceJsonResponse::class)->group(function () {
    Route::prefix('v1')->group(function () {
        Route::get("/", function (Request $request) {return "Blogging-Backend-System";});
    });
});
