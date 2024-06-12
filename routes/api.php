<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Incluye las rutas definidas en auth.php
require base_path('routes/auth.php');

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('anime', AnimeController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
Route::resource('character', CharacterController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
Route::resource('quote', QuoteController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
