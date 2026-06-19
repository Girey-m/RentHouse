<?php

use App\Http\Controllers\Api\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/navigation', [NavigationController::class, 'index']);
