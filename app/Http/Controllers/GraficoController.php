<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\InformacaoNutricional;
use App\Models\Item;
use App\Models\Refeicao;

class GraficoController extends Controller
{

    public function graficosRefeicao($refeicao_id)
    {
        $multiplicador = 0.00;
        
        $calcio = 0.00;
        $carboidratos = 0.00;
        $cobre = 0.00;
        $colesterol = 0.00;
        $ferro = 0.00;
        $fibraAlimentar = 0.00;
        $gordurasInstauradas = 0.00;
        $gordurasSaturadas = 0.00;
        $gordurasTotais = 0.00;
        $gordurasTrans = 0.00;
        $magnesio = 0.00;
        $manganes = 0.00;
        $niacina = 0.00;
        $proteinas = 0.00;
        $sodio = 0.00;
        $tiamina = 0.00;
        $valorEnergetico = 0.00;
        $vitaminaA = 0.00;
        $vitaminaB12 = 0.00;
        $vitaminaB3 = 0.00;
        $vitaminaB6 = 0.00;
        $vitaminaC = 0.00;
        $vitaminaD = 0.00;
        $vitaminaE = 0.00;
        $vitaminaK = 0.00;
        $zinco = 0.00;

        $itens = Item::where('refeicao_id', $refeicao_id)->orderBy('id');
        
        foreach ($itens as $item) {
            $alimento = Alimento::where('id', $item->alimento_id);
            $multiplicador = $item->quantidade / $alimento->quantidade;
            $informacoesNutricionais = InformacaoNutricional::where('alimento_id', $alimento->id);
            foreach ($informacoesNutricionais as $informacaoNutricional) {
                if ($informacaoNutricional->legenda_id == 1) {
                    $valorEnergetico += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 2) {
                    $carboidratos += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 3) {
                    $proteinas += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 4) {
                    $gordurasTotais += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 5) {
                    $gordurasSaturadas += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 6) {
                    $gordurasTrans += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 7) {
                    $gordurasInstauradas += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 8) {
                    $colesterol += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 9) {
                    $fibraAlimentar += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 10) {
                    $sodio += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 11) {
                    $calcio += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 12) {
                    $ferro += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 13) {
                    $zinco += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 14) {
                    $tiamina += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 15) {
                    $niacina += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 16) {
                    $magnesio += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 17) {
                    $cobre += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 18) {
                    $vitaminaA += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 19) {
                    $vitaminaB3 += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 20) {
                    $vitaminaB6 += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 21) {
                    $vitaminaB12 += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 22) {
                    $vitaminaC += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 23) {
                    $vitaminaD += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 24) {
                    $vitaminaE += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 25) {
                    $vitaminaK += ($multiplicador * $informacaoNutricional->quantidade);
                }
                if ($informacaoNutricional->legenda_id == 26) {
                    $manganes += ($multiplicador * $informacaoNutricional->quantidade);
                }
            }
        }

        $refeicao = Refeicao::find($refeicao_id);
        return view('graficos.graficosRefeicao', compact('valorEnergetico', 'carboidratos', 'proteinas', 'gordurasTotais', 'gordurasSaturadas',
                    'gordurasTrans', 'gordurasInstauradas', 'colesterol', 'fibraAlimentar', 'sodio', 'calcio', 'ferro', 'zinco', 'tiamina', 'niacina',
                    'magnesio', 'cobre', 'vitaminaA', 'vitaminaB3', 'vitaminaB6', 'vitaminaB12', 'vitaminaC', 'vitaminaD', 'vitaminaE', 'vitaminaK', 'manganes'),
                    ['refeicao'=>$refeicao, 'itens'=>$itens]);
    }

    public function graficosDia()
    {
        return view('graficos.graficosDia');
    }
}
