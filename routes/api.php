<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoggerController;
use App\Http\Controllers\DiscountController;

// Factory Pattern - User Creation
Route::post('/users', [UserController::class, 'store']);

// Singleton Pattern - Loggin System
Route::post('/log', [LoggerController::class, 'logMessage']);

// Strategy Pattern - Discount Calculation
Route::post('/dicscount', [DiscountController::class, 'applyDiscount']);