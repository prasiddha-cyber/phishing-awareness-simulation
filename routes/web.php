<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingController;

Route::get('/phish/{campaign}', [PhishingController::class, 'showLogin']);
Route::post('/phish/{campaign}', [PhishingController::class, 'handleLogin']);
