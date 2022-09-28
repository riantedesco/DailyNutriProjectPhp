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
Route::get('pessoas/create',[App\Http\Controllers\PessoaController::class,'create']);
Route::post('pessoas/store',[App\Http\Controllers\PessoaController::class,'store']);

Route::get('alimentos',[App\Http\Controllers\AlimentoController::class,'index']);
Route::get('alimentos/create',[App\Http\Controllers\AlimentoController::class,'create']);
Route::post('alimentos/store',[App\Http\Controllers\AlimentoController::class,'store']);

Route::get('refeicoes',[App\Http\Controllers\RefeicaoController::class,'index']);
Route::get('refeicoes/create',[App\Http\Controllers\RefeicaoController::class,'create']);
Route::post('refeicoes/store',[App\Http\Controllers\RefeicaoController::class,'store']);

Route::get('itens',[App\Http\Controllers\ItemController::class,'index']);
Route::get('itens/create',[App\Http\Controllers\ItemController::class,'create']);
Route::post('itens/store',[App\Http\Controllers\ItemController::class,'store']);

Route::get('informacoesNutricionais',[App\Http\Controllers\InformacaoNutricionalController::class,'index']);
Route::get('informacoesNutricionais/create',[App\Http\Controllers\InformacaoNutricionalController::class,'create']);
Route::post('informacoesNutricionais/store',[App\Http\Controllers\InformacaoNutricionalController::class,'store']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
