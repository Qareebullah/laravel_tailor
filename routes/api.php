<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\customersController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\measurementsController;
use App\Http\Controllers\API\stockController;
use App\Http\Controllers\API\ordersController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\incomesController;
use App\Http\Controllers\API\expenseController;
use App\Http\Controllers\API\reportsController;


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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


// Protected routes (require Sanctum token)
Route::middleware('auth:sanctum')->group(function () {

Route::post('logout', [AuthController::class, 'logout']);

// customers
Route::apiResource('customers', customersController::class);

// measurements
Route::apiResource('measurements', measurementsController::class);

// staff register
Route::apiResource('registration', UserController::class);

// stock 
Route::apiResource('stock', UserController::class);

// orders
Route::apiResource('orders', ordersController::class);

// incomes
Route::apiResource('incomes', incomesController::class);

// expense
Route::apiResource('expense', expenseController::class);

// reports
Route::apiResource('reports', reportsController::class);

});


