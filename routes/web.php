<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Main
Route::get('/', [MainController::class, 'home'])->name('homePage');

// Rota para gerar os exercícios
Route::post('/generate-exercises', [MainController::class, 'generateExercises'])->name('generated');

// Rota para mostrar os exercícios na tela
Route::get('/print-exercises', [MainController::class, 'printExercises'])->name('print');

// Rota para exportar os exercícios
Route::get('/export-exercises', [MainController::class, 'exportExercises'])->name('export');

