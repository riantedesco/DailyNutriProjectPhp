<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Http\Requests\AlimentoRequest;

class AlimentoController extends Controller
{
    public function index(){
        $alimentos = Alimento::All();
        return view('alimentos.index', ['alimentos'=>$alimentos]);
    }

    public function create() {
        return view('alimentos.create');
    }

    public function store(AlimentoRequest $request) {
        $novo_alimento = $request->all();
        Alimento::create($novo_alimento);

        return redirect('alimentos');
    }
}
