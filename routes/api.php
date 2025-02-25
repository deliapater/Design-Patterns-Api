<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Factory Pattern - User Creation
Route::post('/users', [UserController::class, 'store']);