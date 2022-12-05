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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'alimentos', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('',             ['as' => 'alimentos',         'uses' => 'App\Http\Controllers\AlimentoController@index']);
        Route::get('create',       ['as' => 'alimentos.create',  'uses' => 'App\Http\Controllers\AlimentoController@create']);
        Route::get('{id}/destroy', ['as' => 'alimentos.destroy', 'uses' => 'App\Http\Controllers\AlimentoController@destroy']);
        Route::get('{id}/edit',    ['as' => 'alimentos.edit',    'uses' => 'App\Http\Controllers\AlimentoController@edit']);
        Route::put('{id}/update',  ['as' => 'alimentos.update',  'uses' => 'App\Http\Controllers\AlimentoController@update']);
        Route::post('store',       ['as' => 'alimentos.store',   'uses' => 'App\Http\Controllers\AlimentoController@store']);

        Route::group(['prefix' => '{alimento_id}/informacoesNutricionais', 'where' => ['id' => '[0-9]+']], function () {
            Route::get('',             ['as' => 'informacoesNutricionais',         'uses' => 'App\Http\Controllers\InformacaoNutricionalController@index']);
            Route::get('create',       ['as' => 'informacoesNutricionais.create',  'uses' => 'App\Http\Controllers\InformacaoNutricionalController@create']);
        });
    });

    Route::group(['prefix' => 'informacoesNutricionais', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('{id}/destroy', ['as' => 'informacoesNutricionais.destroy', 'uses' => 'App\Http\Controllers\InformacaoNutricionalController@destroy']);
        Route::get('{id}/edit',    ['as' => 'informacoesNutricionais.edit',    'uses' => 'App\Http\Controllers\InformacaoNutricionalController@edit']);
        Route::put('{id}/update',  ['as' => 'informacoesNutricionais.update',  'uses' => 'App\Http\Controllers\InformacaoNutricionalController@update']);
        Route::post('store',       ['as' => 'informacoesNutricionais.store',   'uses' => 'App\Http\Controllers\InformacaoNutricionalController@store']);
    });

    Route::group(['prefix' => 'refeicoes', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('',             ['as' => 'refeicoes',         'uses' => 'App\Http\Controllers\RefeicaoController@index']);
        Route::get('create',       ['as' => 'refeicoes.create',  'uses' => 'App\Http\Controllers\RefeicaoController@create']);
        Route::get('{id}/destroy', ['as' => 'refeicoes.destroy', 'uses' => 'App\Http\Controllers\RefeicaoController@destroy']);
        Route::get('{id}/edit',    ['as' => 'refeicoes.edit',    'uses' => 'App\Http\Controllers\RefeicaoController@edit']);
        Route::put('{id}/update',  ['as' => 'refeicoes.update',  'uses' => 'App\Http\Controllers\RefeicaoController@update']);
        Route::post('store',       ['as' => 'refeicoes.store',   'uses' => 'App\Http\Controllers\RefeicaoController@store']);

        Route::group(['prefix' => '{refeicao_id}/itens', 'where' => ['id' => '[0-9]+']], function () {
            Route::get('',             ['as' => 'itens',         'uses' => 'App\Http\Controllers\ItemController@index']);
            Route::get('create',       ['as' => 'itens.create',  'uses' => 'App\Http\Controllers\ItemController@create']);
        });

        Route::group(['prefix' => '{refeicao_id}/graficos', 'where' => ['id' => '[0-9]+']], function () {
            Route::get('',    ['as' => 'graficos.graficosRefeicao',    'uses' => 'App\Http\Controllers\GraficoController@graficosRefeicao']);
        });
    });

    Route::group(['prefix' => 'itens', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('{id}/destroy', ['as' => 'itens.destroy', 'uses' => 'App\Http\Controllers\ItemController@destroy']);
        Route::get('{id}/edit',    ['as' => 'itens.edit',    'uses' => 'App\Http\Controllers\ItemController@edit']);
        Route::put('{id}/update',  ['as' => 'itens.update',  'uses' => 'App\Http\Controllers\ItemController@update']);
        Route::post('store',       ['as' => 'itens.store',   'uses' => 'App\Http\Controllers\ItemController@store']);
    });

    Route::group(['prefix' => 'legendasNutricionais', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('',             ['as' => 'legendasNutricionais',         'uses' => 'App\Http\Controllers\LegendaNutricionalController@index']);
        Route::get('create',       ['as' => 'legendasNutricionais.create',  'uses' => 'App\Http\Controllers\LegendaNutricionalController@create']);
        Route::get('{id}/destroy', ['as' => 'legendasNutricionais.destroy', 'uses' => 'App\Http\Controllers\LegendaNutricionalController@destroy']);
        Route::get('{id}/edit',    ['as' => 'legendasNutricionais.edit',    'uses' => 'App\Http\Controllers\LegendaNutricionalController@edit']);
        Route::put('{id}/update',  ['as' => 'legendasNutricionais.update',  'uses' => 'App\Http\Controllers\LegendaNutricionalController@update']);
        Route::post('store',       ['as' => 'legendasNutricionais.store',   'uses' => 'App\Http\Controllers\LegendaNutricionalController@store']);
    });

    Route::group(['prefix' => 'relatorios', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('',                                          ['as' => 'relatorios.index',                                      'uses' => 'App\Http\Controllers\RelatorioController@index']);
        Route::get('legendasNutricionais',                      ['as' => 'relatorios.legendasNutricionais',                       'uses' => 'App\Http\Controllers\LegendaNutricionalController@relatorio']);
        Route::get('legendasNutricionais/filtrarDescricao',     ['as' => 'relatorios.legendasNutricionais.filtrarDescricao',      'uses' => 'App\Http\Controllers\LegendaNutricionalController@relatorioFiltroDescricao']);
        Route::get('informacoesNutricionais',                   ['as' => 'relatorios.informacoesNutricionais',                    'uses' => 'App\Http\Controllers\InformacaoNutricionalController@relatorio']);
        Route::get('informacoesNutricionais/filtrarQuantidade', ['as' => 'relatorios.informacoesNutricionais.filtrarQuantidade',  'uses' => 'App\Http\Controllers\InformacaoNutricionalController@relatorioFiltroQuantidade']);
        Route::get('users',                                     ['as' => 'relatorios.users',                                      'uses' => 'App\Http\Controllers\UserController@relatorio']);
    });

    Route::group(['prefix' => 'graficos', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('graficosDia',           ['as' => 'graficos.graficosDia',             'uses' => 'App\Http\Controllers\GraficoController@graficosDia']);
        Route::get('graficosSemana',        ['as' => 'graficos.graficosSemana',          'uses' => 'App\Http\Controllers\GraficoController@graficosSemana']);
        Route::get('graficosMes',           ['as' => 'graficos.graficosMes',             'uses' => 'App\Http\Controllers\GraficoController@graficosMes']);
    });
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
