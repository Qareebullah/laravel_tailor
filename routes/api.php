<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\customersController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\measurementsController;
use App\Http\Controllers\API\stockController;
use App\Http\Controllers\API\ordersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\API\Controller;

Route::post('register', [Controller::class, 'register']);
Route::post('login', [Controller::class, 'login']);

// customers
Route::apiResource('customers', customersController::class);

// measurements
Route::apiResource('measurements', measurementsController::class);

// staff register
Route::apiResource('registration', UserController::class);

// stock 
Route::apiResource('stock', UserController::class);

// orders
Route::apiResource('orders', customersController::class);


