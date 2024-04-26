<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdicionarController;
use App\Http\Controllers\FuncoesController;
use App\Http\Controllers\VizualizarController;
use App\Http\Controllers\EditarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/report', [ReportController::class,'index']);

Route::get('/entradaesaida', [ReportController::class, 'index']);


Route::get('/entrada', [EntradaController::class, 'index']);

Route::get('/adicionar', [AdicionarController::class, 'index']);


Route::get('/funcoes', [FuncoesController::class, 'index']);

Route::get('/vizualizar', [VizualizarController::class, 'index']);

Route::get('/editar', [EditarController::class, 'index']);

