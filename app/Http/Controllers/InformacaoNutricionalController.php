<?php

namespace App\Http\Controllers;

use App\Models\InformacaoNutricional;
use App\Http\Requests\InformacaoNutricionalRequest;

class InformacaoNutricionalController extends Controller
{
    public function index(){
        $informacoesNutricionais = InformacaoNutricional::All();
        return view('informacoesNutricionais.index', ['informacoesNutricionais'=>$informacoesNutricionais]);
    }

    public function create() {
        return view('informacoesNutricionais.create');
    }

    public function store(InformacaoNutricionalRequest $request) {
        $nova_informacaoNutricional = $request->all();
        InformacaoNutricional::create($nova_informacaoNutricional);

        return redirect()->route('informacoesNutricionais');
    }

    public function destroy($id) {
        InformacaoNutricional::find($id)->delete();
        return redirect()->route('informacoesNutricionais');
    }

    public function edit($id) {
        $informacaoNutricional = InformacaoNutricional::find($id);
        return view('informacoesNutricionais.edit', compact('informacaoNutricional'));
    }

    public function update(InformacaoNutricionalRequest $request, $id) {
        InformacaoNutricional::find($id)->update($request->all());
        return redirect()->route('informacoesNutricionais');
    }
}
