<?php
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReservationController;
use Illuminate\Routing\Route;

Route::apiResource('events', EventController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('reservations', ReservationController::class);
