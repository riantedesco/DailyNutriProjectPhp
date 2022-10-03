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

Route::get('alimentos',[App\Http\Controllers\AlimentoController::class,'index'])->name('alimentos.listar');
Route::get('alimentos/create',[App\Http\Controllers\AlimentoController::class,'create'])->name('alimentos.criar');
Route::post('alimentos/store',[App\Http\Controllers\AlimentoController::class,'store']);

Route::get('refeicoes',[App\Http\Controllers\RefeicaoController::class,'index'])->name('refeicoes.listar');
Route::get('refeicoes/create',[App\Http\Controllers\RefeicaoController::class,'create'])->name('refeicoes.criar');
Route::post('refeicoes/store',[App\Http\Controllers\RefeicaoController::class,'store']);

Route::get('itens',[App\Http\Controllers\ItemController::class,'index'])->name('itens.listar');
Route::get('itens/create',[App\Http\Controllers\ItemController::class,'create'])->name('itens.criar');
Route::post('itens/store',[App\Http\Controllers\ItemController::class,'store']);

Route::get('informacoesNutricionais',[App\Http\Controllers\InformacaoNutricionalController::class,'index'])->name('informacoesNutricionais.listar');
Route::get('informacoesNutricionais/create',[App\Http\Controllers\InformacaoNutricionalController::class,'create'])->name('informacoesNutricionais.criar');
Route::post('informacoesNutricionais/store',[App\Http\Controllers\InformacaoNutricionalController::class,'store']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
