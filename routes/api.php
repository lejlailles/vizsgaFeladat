<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzakdogaController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/szakdogak', [SzakdogaController::class, 'index']);
Route::post('/szakdogak', [SzakdogaControlle::class, 'post']);
Route::post('/szakdogak/{id}', [SzakdogaControlle::class, 'update']);
Route::delete('/szakdogak/{id}', [SzakdogaControlle::class, 'destroy']);
