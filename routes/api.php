<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//user register
Route::post('/user/register', [App\Http\Controllers\Api\AuthController::class, 'userRegister']);

//restaurant register
Route::post('/restaurant/register', [App\Http\Controllers\Api\AuthController::class, 'restaurantRegister']);

//driver register
Route::post('/driver/register', [App\Http\Controllers\Api\AuthController::class, 'driverRegister']);

//login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//logout
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

// update latlong user
Route::put('user/update-latlong', [App\Http\Controllers\Api\AuthController::class, 'updateLatlong'])->middleware('auth:sanctum');

//get all restaurant
Route::get('/restaurant', [App\Http\Controllers\Api\AuthController::class, 'getRestaurant']);

Route::apiResource('/products', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');
