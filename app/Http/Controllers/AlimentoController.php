<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Http\Requests\AlimentoRequest;

class AlimentoController extends Controller
{
    public function index(){
        $alimentos = Alimento::orderBy('nome')->paginate(5);
        return view('alimentos.index', ['alimentos'=>$alimentos]);
    }

    public function create() {
        return view('alimentos.create');
    }

    public function store(AlimentoRequest $request) {
        $novo_alimento = $request->all();
        Alimento::create($novo_alimento);

        return redirect()->route('alimentos');
    }

    public function destroy($id) {
        Alimento::find($id)->delete();
        return redirect()->route('alimentos');
    }

    public function edit($id) {
        $alimento = Alimento::find($id);
        return view('alimentos.edit', compact('alimento'));
    }

    public function update(AlimentoRequest $request, $id) {
        Alimento::find($id)->update($request->all());
        return redirect()->route('alimentos');
    }
}
