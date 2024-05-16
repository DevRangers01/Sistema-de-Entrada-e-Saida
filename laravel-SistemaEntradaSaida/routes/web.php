<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdicionarController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\FuncoesController;
use App\Http\Controllers\VizualizarController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\EmployeerController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\VisitantController;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/report', [ReportController::class,'index']);

Route::get('/entradaesaida', [ReportController::class, 'index']);


Route::get('/entrada', [EntradaController::class, 'index']);

Route::get('/adicionar', [AdicionarController::class, 'index']);


Route::get('/funcoes', [FuncoesController::class, 'index']);

Route::get('/vizualizar', [VizualizarController::class, 'index']);

Route::get('/editar', [EditarController::class, 'index']);

Route::get('/create.blade', [ResidentController::class, 'index']);

Route::get('/', function () {
    return view ('welcome');
});


Route::get('/residents/create', [ResidentController::class, 'create']);
Route::post('/residents/update', [ResidentController::class, 'update']);

Route::get('/visitants/create', [VisitantController::class, 'create']);
Route::post('/visitants/update', [VisitantController::class, 'update']);

Route::get('/cards/create', [CardController::class, 'create']);
Route::post('/cards/update', [CardController::class, 'update']);

Route::get('/employeers/create', [EmployeerController::class, 'create']);
Route::post('/employeers/update', [EmployeerController::class, 'update']);

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/update', [PostController::class, 'update']);

Route::get('/editar/create', [EditarController::class, 'create'])->name('editar.create');
Route::post('/editar/create', [EditarController::class, 'store']);

Route::get('/editar/update/{id}', [EditarController::class, 'update'])->name('editar.update');
Route::post('/editar/update/{id}', [EditarController::class, 'edit']);

Route::get('/editar/delete/{id}', [EditarController::class, 'deleteColumn'])->name('deleteColumn');
