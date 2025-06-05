<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('leds/{led}',[\App\Http\Controllers\LeedController::class,'show']);
Route::post('leds',[\App\Http\Controllers\LeedController::class,'store']);
Route::put('leds/{led}',[\App\Http\Controllers\LeedController::class,'update']);
Route::put('leds-status/{led}',[\App\Http\Controllers\LeedController::class,'updateStatus']);
