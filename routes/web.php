<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TituloController;

Route::get('/', function () {
    return view('principal');
})->name('principal');

// Grupo de rutas para la gestión de tenistas
Route::prefix('tenistas')->name('tenistas.')->group(function () {
    Route::get('/', [TenistaController::class, 'index'])->name('index');
    Route::post('/', [TenistaController::class, 'store'])->name('store');
    Route::get('/create', [TenistaController::class, 'create'])->name('create');
    Route::get('/{tenista}/edit', [TenistaController::class, 'edit'])->name('edit');
    Route::put('/{tenista}', [TenistaController::class, 'update'])->name('update');
    Route::patch('/{tenista}/delete', [TenistaController::class, 'delete'])->name('delete');
    Route::get('/{tenista}/titulos', [TituloController::class, 'titulosTenista'])->name('titulos');
});
