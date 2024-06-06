<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('anime', AnimeController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
Route::resource('character', CharacterController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
Route::resource('quote', QuoteController::class)->except(['create', 'store', "edit", 'update', 'destroy']);
