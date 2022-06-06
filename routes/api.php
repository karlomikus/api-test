<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CircleController;
use App\Http\Controllers\TriangleController;
use App\Http\Controllers\RequestLogController;

Route::get('/triangle/{a}/{b}/{c}', [TriangleController::class, 'calculate']);
Route::get('/circle/{r}', [CircleController::class, 'calculate']);
Route::get('/logs', [RequestLogController::class, 'index']);
Route::get('/logs/{id}', [RequestLogController::class, 'show']);
