<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombustivelController;

Route::get('/', [CombustivelController::class, 'index']);

Route::get('/gasto', [CombustivelController::class, 'gasto']);
