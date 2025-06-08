<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('landing');
});

Route::get('/', [LandingController::class, 'index']);