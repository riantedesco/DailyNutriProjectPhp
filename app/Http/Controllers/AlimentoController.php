<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    public function index(){
        $alimentos = Alimento::All();
        return view('alimentos', ['alimentos'=>$alimentos]);
    }
}
