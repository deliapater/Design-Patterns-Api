<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoggerController;

// Factory Pattern - User Creation
Route::post('/users', [UserController::class, 'store']);

// Singleton Pattern - Loggin System
Route::post('/log', [LoggerController::class, 'logMessage']);