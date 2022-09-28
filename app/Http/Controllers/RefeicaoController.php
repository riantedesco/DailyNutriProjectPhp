<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use App\Http\Requests\RefeicaoRequest;

class RefeicaoController extends Controller
{
    public function index(){
        $refeicoes = Refeicao::All();
        return view('refeicoes.index', ['refeicoes'=>$refeicoes]);
    }

    public function create() {
        return view('refeicoes.create');
    }

    public function store(RefeicaoRequest $request) {
        $nova_refeicao = $request->all();
        Refeicao::create($nova_refeicao);

        return redirect('refeicoes');
    }
}
