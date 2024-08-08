<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtraccionController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\EspecieController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});
require __DIR__.'/auth.php';

Route::get('atracciones', [AtraccionController::class, 'index'])->name('atracciones.index');
Route::get('/comentarios/search', [ComentarioController::class, 'search'])->name('comentarios.search');
Route::get('/atracciones/{id}', [AtraccionController::class, 'show'])->name('atracciones.show');
Route::get('/especies/{id}', [EspecieController::class, 'show'])->name('especies.show');