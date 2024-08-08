<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ComentarioApi;
use App\Http\Controllers\Api\EspecieApi;
use App\Http\Controllers\Api\AtraccionApi;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comentarios', [ComentarioApi::class, 'store'])->middleware(['auth:sanctum']);
Route::get('/especies', [EspecieApi::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/atracciones/{id}/especie', [AtraccionApi::class, 'getEspecie'])->middleware(['auth:sanctum']);
Route::put('/atracciones/{id}', [AtraccionApi::class, 'update'])->middleware(['auth:sanctum']);
