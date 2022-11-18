<?php

namespace App\Http\Controllers;

use App\Models\LegendaNutricional;
use App\Models\Alimento;
use App\Models\InformacaoNutricional;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioController extends Controller
{

    public function legendaNutricional()
    {
        $legendasNutricionais = LegendaNutricional::all();

        $pdf = PDF::loadView('relatorios.legendasNutricionais', compact('legendasNutricionais'));

        return $pdf->stream();
    }

    public function alimento()
    {
        $alimentos = Alimento::all();

        // $informacoesNutricionais = Alimento::join('informacoesNutricionais', 'id', '=', 'informacoesNutricionais.alimento_id');

        // $informacoesNutricionais = InformacaoNutricional::where('alimento_id', 'like', $alimentos.'.id');

        $informacoesNutricionais = InformacaoNutricional::all();

        // foreach ($alimentos as $alimento) {
        //     $informacoesNutricionais = InformacaoNutricional::where('alimento_id', 'like', $alimento->id);
        // }

        // $informacoesNutricionais = InformacaoNutricional::with($alimentos.'.id', 'alimento_id');

        $pdf = PDF::loadView('relatorios.alimentos', compact('alimentos', 'informacoesNutricionais'));

        return $pdf->stream();
    }
}
