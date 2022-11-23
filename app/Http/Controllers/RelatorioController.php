<?php

namespace App\Http\Controllers;

use App\Models\LegendaNutricional;
use App\Models\Alimento;
use App\Models\InformacaoNutricional;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioController extends Controller
{

    public function index()
    {
        return view('relatorios.index');
    }
}
