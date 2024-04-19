<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/report', [ReportController::class,'index']);

Route::get('/entradaesaida', [ReportController::class, 'index']);

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::get('/entrada', [EntradaController::class, 'index']);

