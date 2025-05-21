<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('notas/welcome');
})->name('home');

Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');
Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');
Route::put('/notas/{id}', [NotaController::class, 'update'])->name('notas.update');