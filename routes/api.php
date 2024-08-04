<?php

use App\Http\Controllers\EnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/endereco', [EnderecoController::class, 'store']);

Route::get('/endereco/{id}', [EnderecoController::class, 'show']);
