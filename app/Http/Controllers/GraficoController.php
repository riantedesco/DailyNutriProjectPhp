<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\Refeicao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $calcioVd = 0.00;
        $carboidratosVd = 0.00;
        $cobreVd = 0.00;
        $colesterolVd = 0.00;
        $ferroVd = 0.00;
        $fibraAlimentarVd = 0.00;
        $gordurasInstauradasVd = 0.00;
        $gordurasSaturadasVd = 0.00;
        $gordurasTotaisVd = 0.00;
        $gordurasTransVd = 0.00;
        $magnesioVd = 0.00;
        $manganesVd = 0.00;
        $niacinaVd = 0.00;
        $proteinasVd = 0.00;
        $sodioVd = 0.00;
        $tiaminaVd = 0.00;
        $valorEnergeticoVd = 0.00;
        $vitaminaAVd = 0.00;
        $vitaminaB12Vd = 0.00;
        $vitaminaB3Vd = 0.00;
        $vitaminaB6Vd = 0.00;
        $vitaminaCVd = 0.00;
        $vitaminaDVd = 0.00;
        $vitaminaEVd = 0.00;
        $vitaminaKVd = 0.00;
        $zincoVd = 0.00;

        $itens = DB::table('itens')
            ->select('id', 'quantidade', 'alimento_id', 'refeicao_id')
            ->where('refeicao_id', '=', $refeicao_id)
            ->get();

        foreach ($itens as $item) {
            $alimento = Alimento::find($item->alimento_id);
            $multiplicador = $item->quantidade / $alimento->quantidade;
            $informacoesNutricionais = DB::table('informacoesNutricionais')
                ->select('id', 'quantidade', 'valorDiario', 'alimento_id', 'legendaNutricional_id')
                ->where('alimento_id', '=', $alimento->id)
                ->get();
            foreach ($informacoesNutricionais as $informacaoNutricional) {
                if ($informacaoNutricional->legendaNutricional_id == 1) {
                    $valorEnergetico += ($multiplicador * $informacaoNutricional->quantidade);
                    $valorEnergeticoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 2) {
                    $carboidratos += ($multiplicador * $informacaoNutricional->quantidade);
                    $carboidratosVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 3) {
                    $proteinas += ($multiplicador * $informacaoNutricional->quantidade);
                    $proteinasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 4) {
                    $gordurasTotais += ($multiplicador * $informacaoNutricional->quantidade);
                    $gordurasTotaisVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 5) {
                    $gordurasSaturadas += ($multiplicador * $informacaoNutricional->quantidade);
                    $gordurasSaturadasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 6) {
                    $gordurasTrans += ($multiplicador * $informacaoNutricional->quantidade);
                    $gordurasTransVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 7) {
                    $gordurasInstauradas += ($multiplicador * $informacaoNutricional->quantidade);
                    $gordurasInstauradasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 8) {
                    $colesterol += ($multiplicador * $informacaoNutricional->quantidade);
                    $colesterolVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 9) {
                    $fibraAlimentar += ($multiplicador * $informacaoNutricional->quantidade);
                    $fibraAlimentarVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 10) {
                    $sodio += ($multiplicador * $informacaoNutricional->quantidade);
                    $sodioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 11) {
                    $calcio += ($multiplicador * $informacaoNutricional->quantidade);
                    $calcioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 12) {
                    $ferro += ($multiplicador * $informacaoNutricional->quantidade);
                    $ferroVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 13) {
                    $zinco += ($multiplicador * $informacaoNutricional->quantidade);
                    $zincoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 14) {
                    $tiamina += ($multiplicador * $informacaoNutricional->quantidade);
                    $tiaminaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 15) {
                    $niacina += ($multiplicador * $informacaoNutricional->quantidade);
                    $niacinaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 16) {
                    $magnesio += ($multiplicador * $informacaoNutricional->quantidade);
                    $magnesioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 17) {
                    $cobre += ($multiplicador * $informacaoNutricional->quantidade);
                    $cobreVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 18) {
                    $vitaminaA += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaAVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 19) {
                    $vitaminaB3 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaB3Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 20) {
                    $vitaminaB6 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaB6Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 21) {
                    $vitaminaB12 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaB12Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 22) {
                    $vitaminaC += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaCVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 23) {
                    $vitaminaD += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaDVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 24) {
                    $vitaminaE += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaEVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 25) {
                    $vitaminaK += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                    $vitaminaKVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
                if ($informacaoNutricional->legendaNutricional_id == 26) {
                    $manganes += ($multiplicador * $informacaoNutricional->quantidade);
                    $manganesVd += ($multiplicador * $informacaoNutricional->valorDiario);
                }
            }
        }

        $dataInfNutricional = [
            $carboidratos, $proteinas, $gordurasTotais, $gordurasSaturadas, $gordurasTrans, $gordurasInstauradas, $colesterol,
            $fibraAlimentar, $sodio, $calcio, $ferro, $zinco, $tiamina, $niacina, $magnesio, $cobre, $vitaminaA, $vitaminaB3, $vitaminaB6,
            $vitaminaB12, $vitaminaC, $vitaminaD, $vitaminaE, $vitaminaK, $manganes
        ];

        $dataValorDiario = [
            $valorEnergeticoVd, $carboidratosVd, $proteinasVd, $gordurasTotaisVd, $gordurasSaturadasVd, $gordurasTransVd, $gordurasInstauradasVd, $colesterolVd,
            $fibraAlimentarVd, $sodioVd, $calcioVd, $ferroVd, $zincoVd, $tiaminaVd, $niacinaVd, $magnesioVd, $cobreVd, $vitaminaAVd,
            $vitaminaB3Vd, $vitaminaB6Vd, $vitaminaB12Vd, $vitaminaCVd, $vitaminaDVd, $vitaminaEVd, $vitaminaKVd, $manganesVd
        ];

        $refeicao = Refeicao::find($refeicao_id);
        return view(
            'graficos.graficosRefeicao',
            compact('valorEnergetico'),
            ['refeicao' => $refeicao, 'itens' => $itens, 'dataInfNutricional' => $dataInfNutricional, 'dataValorDiario' => $dataValorDiario]
        );
    }

    public function graficosDia()
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
        $calcioVd = 0.00;
        $carboidratosVd = 0.00;
        $cobreVd = 0.00;
        $colesterolVd = 0.00;
        $ferroVd = 0.00;
        $fibraAlimentarVd = 0.00;
        $gordurasInstauradasVd = 0.00;
        $gordurasSaturadasVd = 0.00;
        $gordurasTotaisVd = 0.00;
        $gordurasTransVd = 0.00;
        $magnesioVd = 0.00;
        $manganesVd = 0.00;
        $niacinaVd = 0.00;
        $proteinasVd = 0.00;
        $sodioVd = 0.00;
        $tiaminaVd = 0.00;
        $valorEnergeticoVd = 0.00;
        $vitaminaAVd = 0.00;
        $vitaminaB12Vd = 0.00;
        $vitaminaB3Vd = 0.00;
        $vitaminaB6Vd = 0.00;
        $vitaminaCVd = 0.00;
        $vitaminaDVd = 0.00;
        $vitaminaEVd = 0.00;
        $vitaminaKVd = 0.00;
        $zincoVd = 0.00;

        $dataHoje = date('Y/m/d');
        $refeicoesDiarias = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '=', $dataHoje)
            ->get();

        foreach ($refeicoesDiarias as $refeicao) {
            $itens = DB::table('itens')
                ->select('id', 'quantidade', 'alimento_id', 'refeicao_id')
                ->where('refeicao_id', '=', $refeicao->id)
                ->get();
            foreach ($itens as $item) {
                $alimento = Alimento::find($item->alimento_id);
                $multiplicador = $item->quantidade / $alimento->quantidade;
                $informacoesNutricionais = DB::table('informacoesNutricionais')
                    ->select('id', 'quantidade', 'valorDiario', 'alimento_id', 'legendaNutricional_id')
                    ->where('alimento_id', '=', $alimento->id)
                    ->get();
                foreach ($informacoesNutricionais as $informacaoNutricional) {
                    if ($informacaoNutricional->legendaNutricional_id == 1) {
                        $valorEnergetico += ($multiplicador * $informacaoNutricional->quantidade);
                        $valorEnergeticoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 2) {
                        $carboidratos += ($multiplicador * $informacaoNutricional->quantidade);
                        $carboidratosVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 3) {
                        $proteinas += ($multiplicador * $informacaoNutricional->quantidade);
                        $proteinasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 4) {
                        $gordurasTotais += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTotaisVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 5) {
                        $gordurasSaturadas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasSaturadasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 6) {
                        $gordurasTrans += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTransVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 7) {
                        $gordurasInstauradas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasInstauradasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 8) {
                        $colesterol += ($multiplicador * $informacaoNutricional->quantidade);
                        $colesterolVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 9) {
                        $fibraAlimentar += ($multiplicador * $informacaoNutricional->quantidade);
                        $fibraAlimentarVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 10) {
                        $sodio += ($multiplicador * $informacaoNutricional->quantidade);
                        $sodioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 11) {
                        $calcio += ($multiplicador * $informacaoNutricional->quantidade);
                        $calcioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 12) {
                        $ferro += ($multiplicador * $informacaoNutricional->quantidade);
                        $ferroVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 13) {
                        $zinco += ($multiplicador * $informacaoNutricional->quantidade);
                        $zincoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 14) {
                        $tiamina += ($multiplicador * $informacaoNutricional->quantidade);
                        $tiaminaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 15) {
                        $niacina += ($multiplicador * $informacaoNutricional->quantidade);
                        $niacinaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 16) {
                        $magnesio += ($multiplicador * $informacaoNutricional->quantidade);
                        $magnesioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 17) {
                        $cobre += ($multiplicador * $informacaoNutricional->quantidade);
                        $cobreVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 18) {
                        $vitaminaA += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaAVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 19) {
                        $vitaminaB3 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB3Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 20) {
                        $vitaminaB6 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB6Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 21) {
                        $vitaminaB12 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB12Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 22) {
                        $vitaminaC += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaCVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 23) {
                        $vitaminaD += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaDVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 24) {
                        $vitaminaE += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaEVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 25) {
                        $vitaminaK += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaKVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 26) {
                        $manganes += ($multiplicador * $informacaoNutricional->quantidade);
                        $manganesVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                }
            }
        }

        $dataInfNutricional = [
            $carboidratos, $proteinas, $gordurasTotais, $gordurasSaturadas, $gordurasTrans, $gordurasInstauradas, $colesterol,
            $fibraAlimentar, $sodio, $calcio, $ferro, $zinco, $tiamina, $niacina, $magnesio, $cobre, $vitaminaA, $vitaminaB3, $vitaminaB6,
            $vitaminaB12, $vitaminaC, $vitaminaD, $vitaminaE, $vitaminaK, $manganes
        ];

        $dataValorDiario = [
            $valorEnergeticoVd, $carboidratosVd, $proteinasVd, $gordurasTotaisVd, $gordurasSaturadasVd, $gordurasTransVd, $gordurasInstauradasVd, $colesterolVd,
            $fibraAlimentarVd, $sodioVd, $calcioVd, $ferroVd, $zincoVd, $tiaminaVd, $niacinaVd, $magnesioVd, $cobreVd, $vitaminaAVd,
            $vitaminaB3Vd, $vitaminaB6Vd, $vitaminaB12Vd, $vitaminaCVd, $vitaminaDVd, $vitaminaEVd, $vitaminaKVd, $manganesVd
        ];

        return view(
            'graficos.graficosDia',
            compact('valorEnergetico'),
            ['refeicoesDiarias' => $refeicoesDiarias, 'dataHoje' => $dataHoje, 'dataInfNutricional' => $dataInfNutricional, 'dataValorDiario' => $dataValorDiario]
        );

        return view('graficos.graficosDia');
    }

    public function graficosSemana()
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
        $calcioVd = 0.00;
        $carboidratosVd = 0.00;
        $cobreVd = 0.00;
        $colesterolVd = 0.00;
        $ferroVd = 0.00;
        $fibraAlimentarVd = 0.00;
        $gordurasInstauradasVd = 0.00;
        $gordurasSaturadasVd = 0.00;
        $gordurasTotaisVd = 0.00;
        $gordurasTransVd = 0.00;
        $magnesioVd = 0.00;
        $manganesVd = 0.00;
        $niacinaVd = 0.00;
        $proteinasVd = 0.00;
        $sodioVd = 0.00;
        $tiaminaVd = 0.00;
        $valorEnergeticoVd = 0.00;
        $vitaminaAVd = 0.00;
        $vitaminaB12Vd = 0.00;
        $vitaminaB3Vd = 0.00;
        $vitaminaB6Vd = 0.00;
        $vitaminaCVd = 0.00;
        $vitaminaDVd = 0.00;
        $vitaminaEVd = 0.00;
        $vitaminaKVd = 0.00;
        $zincoVd = 0.00;

        $dataHoje = date('Y/m/d');
        $seteDias = date('Y/m/d', strtotime(date('Y-m-d') . '-7days'));
        $refeicoesSemanais = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '<=', $dataHoje)
            ->whereDate('dataHora', '>=', $seteDias)
            ->get();

        foreach ($refeicoesSemanais as $refeicao) {
            $itens = DB::table('itens')
                ->select('id', 'quantidade', 'alimento_id', 'refeicao_id')
                ->where('refeicao_id', '=', $refeicao->id)
                ->get();
            foreach ($itens as $item) {
                $alimento = Alimento::find($item->alimento_id);
                $multiplicador = $item->quantidade / $alimento->quantidade;
                $informacoesNutricionais = DB::table('informacoesNutricionais')
                    ->select('id', 'quantidade', 'valorDiario', 'alimento_id', 'legendaNutricional_id')
                    ->where('alimento_id', '=', $alimento->id)
                    ->get();
                foreach ($informacoesNutricionais as $informacaoNutricional) {
                    if ($informacaoNutricional->legendaNutricional_id == 1) {
                        $valorEnergetico += ($multiplicador * $informacaoNutricional->quantidade);
                        $valorEnergeticoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 2) {
                        $carboidratos += ($multiplicador * $informacaoNutricional->quantidade);
                        $carboidratosVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 3) {
                        $proteinas += ($multiplicador * $informacaoNutricional->quantidade);
                        $proteinasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 4) {
                        $gordurasTotais += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTotaisVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 5) {
                        $gordurasSaturadas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasSaturadasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 6) {
                        $gordurasTrans += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTransVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 7) {
                        $gordurasInstauradas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasInstauradasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 8) {
                        $colesterol += ($multiplicador * $informacaoNutricional->quantidade);
                        $colesterolVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 9) {
                        $fibraAlimentar += ($multiplicador * $informacaoNutricional->quantidade);
                        $fibraAlimentarVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 10) {
                        $sodio += ($multiplicador * $informacaoNutricional->quantidade);
                        $sodioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 11) {
                        $calcio += ($multiplicador * $informacaoNutricional->quantidade);
                        $calcioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 12) {
                        $ferro += ($multiplicador * $informacaoNutricional->quantidade);
                        $ferroVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 13) {
                        $zinco += ($multiplicador * $informacaoNutricional->quantidade);
                        $zincoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 14) {
                        $tiamina += ($multiplicador * $informacaoNutricional->quantidade);
                        $tiaminaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 15) {
                        $niacina += ($multiplicador * $informacaoNutricional->quantidade);
                        $niacinaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 16) {
                        $magnesio += ($multiplicador * $informacaoNutricional->quantidade);
                        $magnesioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 17) {
                        $cobre += ($multiplicador * $informacaoNutricional->quantidade);
                        $cobreVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 18) {
                        $vitaminaA += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaAVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 19) {
                        $vitaminaB3 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB3Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 20) {
                        $vitaminaB6 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB6Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 21) {
                        $vitaminaB12 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB12Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 22) {
                        $vitaminaC += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaCVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 23) {
                        $vitaminaD += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaDVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 24) {
                        $vitaminaE += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaEVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 25) {
                        $vitaminaK += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaKVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 26) {
                        $manganes += ($multiplicador * $informacaoNutricional->quantidade);
                        $manganesVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                }
            }
        }

        $dataInfNutricional = [
            $carboidratos, $proteinas, $gordurasTotais, $gordurasSaturadas, $gordurasTrans, $gordurasInstauradas, $colesterol,
            $fibraAlimentar, $sodio, $calcio, $ferro, $zinco, $tiamina, $niacina, $magnesio, $cobre, $vitaminaA, $vitaminaB3, $vitaminaB6,
            $vitaminaB12, $vitaminaC, $vitaminaD, $vitaminaE, $vitaminaK, $manganes
        ];

        $dataValorDiario = [
            $valorEnergeticoVd, $carboidratosVd, $proteinasVd, $gordurasTotaisVd, $gordurasSaturadasVd, $gordurasTransVd, $gordurasInstauradasVd, $colesterolVd,
            $fibraAlimentarVd, $sodioVd, $calcioVd, $ferroVd, $zincoVd, $tiaminaVd, $niacinaVd, $magnesioVd, $cobreVd, $vitaminaAVd,
            $vitaminaB3Vd, $vitaminaB6Vd, $vitaminaB12Vd, $vitaminaCVd, $vitaminaDVd, $vitaminaEVd, $vitaminaKVd, $manganesVd
        ];

        return view(
            'graficos.graficosSemana',
            compact('valorEnergetico'),
            ['refeicoesSemanais' => $refeicoesSemanais, 'seteDias' => $seteDias, 'dataHoje' => $dataHoje, 'dataInfNutricional' => $dataInfNutricional, 'dataValorDiario' => $dataValorDiario]
        );

        return view('graficos.graficosSemana');
    }

    public function graficosMes()
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
        $calcioVd = 0.00;
        $carboidratosVd = 0.00;
        $cobreVd = 0.00;
        $colesterolVd = 0.00;
        $ferroVd = 0.00;
        $fibraAlimentarVd = 0.00;
        $gordurasInstauradasVd = 0.00;
        $gordurasSaturadasVd = 0.00;
        $gordurasTotaisVd = 0.00;
        $gordurasTransVd = 0.00;
        $magnesioVd = 0.00;
        $manganesVd = 0.00;
        $niacinaVd = 0.00;
        $proteinasVd = 0.00;
        $sodioVd = 0.00;
        $tiaminaVd = 0.00;
        $valorEnergeticoVd = 0.00;
        $vitaminaAVd = 0.00;
        $vitaminaB12Vd = 0.00;
        $vitaminaB3Vd = 0.00;
        $vitaminaB6Vd = 0.00;
        $vitaminaCVd = 0.00;
        $vitaminaDVd = 0.00;
        $vitaminaEVd = 0.00;
        $vitaminaKVd = 0.00;
        $zincoVd = 0.00;

        $dataHoje = date('Y/m/d');
        $trintaDias = date('Y/m/d', strtotime(date('Y-m-d') . '-30days'));
        $refeicoesMensais = DB::table('refeicoes')
            ->select('id', 'titulo', 'dataHora', 'user_id')
            ->where('user_id', '=', Auth::user()->id)
            ->whereDate('dataHora', '<=', $dataHoje)
            ->whereDate('dataHora', '>=', $trintaDias)
            ->get();

        foreach ($refeicoesMensais as $refeicao) {
            $itens = DB::table('itens')
                ->select('id', 'quantidade', 'alimento_id', 'refeicao_id')
                ->where('refeicao_id', '=', $refeicao->id)
                ->get();
            foreach ($itens as $item) {
                $alimento = Alimento::find($item->alimento_id);
                $multiplicador = $item->quantidade / $alimento->quantidade;
                $informacoesNutricionais = DB::table('informacoesNutricionais')
                    ->select('id', 'quantidade', 'valorDiario', 'alimento_id', 'legendaNutricional_id')
                    ->where('alimento_id', '=', $alimento->id)
                    ->get();
                foreach ($informacoesNutricionais as $informacaoNutricional) {
                    if ($informacaoNutricional->legendaNutricional_id == 1) {
                        $valorEnergetico += ($multiplicador * $informacaoNutricional->quantidade);
                        $valorEnergeticoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 2) {
                        $carboidratos += ($multiplicador * $informacaoNutricional->quantidade);
                        $carboidratosVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 3) {
                        $proteinas += ($multiplicador * $informacaoNutricional->quantidade);
                        $proteinasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 4) {
                        $gordurasTotais += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTotaisVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 5) {
                        $gordurasSaturadas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasSaturadasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 6) {
                        $gordurasTrans += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasTransVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 7) {
                        $gordurasInstauradas += ($multiplicador * $informacaoNutricional->quantidade);
                        $gordurasInstauradasVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 8) {
                        $colesterol += ($multiplicador * $informacaoNutricional->quantidade);
                        $colesterolVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 9) {
                        $fibraAlimentar += ($multiplicador * $informacaoNutricional->quantidade);
                        $fibraAlimentarVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 10) {
                        $sodio += ($multiplicador * $informacaoNutricional->quantidade);
                        $sodioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 11) {
                        $calcio += ($multiplicador * $informacaoNutricional->quantidade);
                        $calcioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 12) {
                        $ferro += ($multiplicador * $informacaoNutricional->quantidade);
                        $ferroVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 13) {
                        $zinco += ($multiplicador * $informacaoNutricional->quantidade);
                        $zincoVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 14) {
                        $tiamina += ($multiplicador * $informacaoNutricional->quantidade);
                        $tiaminaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 15) {
                        $niacina += ($multiplicador * $informacaoNutricional->quantidade);
                        $niacinaVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 16) {
                        $magnesio += ($multiplicador * $informacaoNutricional->quantidade);
                        $magnesioVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 17) {
                        $cobre += ($multiplicador * $informacaoNutricional->quantidade);
                        $cobreVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 18) {
                        $vitaminaA += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaAVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 19) {
                        $vitaminaB3 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB3Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 20) {
                        $vitaminaB6 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB6Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 21) {
                        $vitaminaB12 += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaB12Vd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 22) {
                        $vitaminaC += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaCVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 23) {
                        $vitaminaD += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaDVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 24) {
                        $vitaminaE += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaEVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 25) {
                        $vitaminaK += ($multiplicador * ($informacaoNutricional->quantidade / 1000));
                        $vitaminaKVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                    if ($informacaoNutricional->legendaNutricional_id == 26) {
                        $manganes += ($multiplicador * $informacaoNutricional->quantidade);
                        $manganesVd += ($multiplicador * $informacaoNutricional->valorDiario);
                    }
                }
            }
        }

        $dataInfNutricional = [
            $carboidratos, $proteinas, $gordurasTotais, $gordurasSaturadas, $gordurasTrans, $gordurasInstauradas, $colesterol,
            $fibraAlimentar, $sodio, $calcio, $ferro, $zinco, $tiamina, $niacina, $magnesio, $cobre, $vitaminaA, $vitaminaB3, $vitaminaB6,
            $vitaminaB12, $vitaminaC, $vitaminaD, $vitaminaE, $vitaminaK, $manganes
        ];

        $dataValorDiario = [
            $valorEnergeticoVd, $carboidratosVd, $proteinasVd, $gordurasTotaisVd, $gordurasSaturadasVd, $gordurasTransVd, $gordurasInstauradasVd, $colesterolVd,
            $fibraAlimentarVd, $sodioVd, $calcioVd, $ferroVd, $zincoVd, $tiaminaVd, $niacinaVd, $magnesioVd, $cobreVd, $vitaminaAVd,
            $vitaminaB3Vd, $vitaminaB6Vd, $vitaminaB12Vd, $vitaminaCVd, $vitaminaDVd, $vitaminaEVd, $vitaminaKVd, $manganesVd
        ];

        return view(
            'graficos.graficosMes',
            compact('valorEnergetico'),
            ['refeicoesMensais' => $refeicoesMensais, 'trintaDias' => $trintaDias, 'dataHoje' => $dataHoje, 'dataInfNutricional' => $dataInfNutricional, 'dataValorDiario' => $dataValorDiario]
        );

        return view('graficos.graficosMes');
    }
}
