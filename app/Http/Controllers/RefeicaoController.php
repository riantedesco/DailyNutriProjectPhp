<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    public function index(){
        $refeicoes = Refeicao::All();
        return view('refeicoes', ['refeicoes'=>$refeicoes]);
    }
}
