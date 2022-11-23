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
        $alimentos = Alimento::orderBy('nome')->get();
        $informacoesNutricionais = InformacaoNutricional::all();
        $pdf = PDF::loadView('relatorios.alimentos', compact('alimentos', 'informacoesNutricionais'));
        return $pdf->stream();
    }
}
