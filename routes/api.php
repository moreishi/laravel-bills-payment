<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BillerController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->apiResource('/users', UserController::class);
Route::middleware('auth:sanctum')->apiResource('/billers', BillerController::class);
Route::middleware('auth:sanctum')->apiResource('/products', ProductController::class);
Route::middleware('auth:sanctum')->apiResource('/invoices', InvoiceController::class);
Route::middleware('auth:sanctum')->apiResource('/payments', PaymentController::class);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);