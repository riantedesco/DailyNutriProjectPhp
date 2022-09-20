<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pessoas',[App\Http\Controllers\PessoaController::class,'index']);

Route::get('alimentos',[App\Http\Controllers\AlimentoController::class,'index']);

Route::get('refeicoes',[App\Http\Controllers\RefeicaoController::class,'index']);

Route::get('itens',[App\Http\Controllers\ItemController::class,'index']);

Route::get('informacoesNutricionais',[App\Http\Controllers\InformacaoNutricionalController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
