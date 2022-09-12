<?php

namespace App\Http\Controllers;

use App\Models\InformacaoNutricional;
use Illuminate\Http\Request;

class InformacaoNutricionalController extends Controller
{
    public function index(){
        $informacoesNutricionais = InformacaoNutricional::All();
        return view('informacoesNutricionais', ['informacoesNutricionais'=>$informacoesNutricionais]);
    }
}
