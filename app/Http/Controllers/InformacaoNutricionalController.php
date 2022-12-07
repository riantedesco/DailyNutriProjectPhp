<?php

namespace App\Http\Controllers;

use App\Models\InformacaoNutricional;
use App\Http\Requests\InformacaoNutricionalRequest;
use App\Models\Alimento;
use App\Models\LegendaNutricional;
use Barryvdh\DomPDF\Facade\Pdf;

class InformacaoNutricionalController extends Controller
{
    public function index($alimento_id){
        $informacoesNutricionais = InformacaoNutricional::where('alimento_id', $alimento_id)->orderBy('id')->paginate(5);
        $alimento = Alimento::find($alimento_id);
        $legendasNutricionais = LegendaNutricional::all();
        return view('informacoesNutricionais.index', ['informacoesNutricionais'=>$informacoesNutricionais, 'alimento'=>$alimento, 'legendasNutricionais'=>$legendasNutricionais]);
    }

    public function create($alimento_id) {
        $alimento = Alimento::find($alimento_id);
        return view('informacoesNutricionais.create', compact('alimento'));
    }

    public function store(InformacaoNutricionalRequest $request) {
        $nova_informacaoNutricional = $request->all();
        $informacaoNutricionalCriada = InformacaoNutricional::create($nova_informacaoNutricional);

        return redirect()->route('informacoesNutricionais', ['alimento_id'=>$informacaoNutricionalCriada->alimento_id]);
    }

    public function destroy($id) {
        try {
            InformacaoNutricional::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
        $informacaoNutricional = InformacaoNutricional::find($id);
        $legendasNutricionais = LegendaNutricional::all();
        return view('informacoesNutricionais.edit', compact('informacaoNutricional'), ['legendasNutricionais'=>$legendasNutricionais]);
    }

    public function update(InformacaoNutricionalRequest $request, $id) {
        InformacaoNutricional::find($id)->update($request->all());
        $informacaoNutricional = InformacaoNutricional::find($id);
        return redirect()->route('informacoesNutricionais', ['alimento_id'=>$informacaoNutricional->alimento_id]);
    }

    public function relatorio()
    {
        $alimentos = Alimento::orderBy('nome')->get();
        $informacoesNutricionais = InformacaoNutricional::all();
        $legendasNutricionais = LegendaNutricional::all();
        $pdf = PDF::loadView('relatorios.alimentos', compact('alimentos', 'informacoesNutricionais'), ['legendasNutricionais'=>$legendasNutricionais]);
        return $pdf->stream();
    }

    public function relatorioFiltroQuantidade()
    {
        $alimentos = Alimento::orderBy('nome')->get();
        $informacoesNutricionais = InformacaoNutricional::orderBy('quantidade', 'DESC')->get();
        $legendasNutricionais = LegendaNutricional::all();
        $pdf = PDF::loadView('relatorios.alimentos', compact('alimentos', 'informacoesNutricionais'), ['legendasNutricionais'=>$legendasNutricionais]);
        return $pdf->stream();
    }
}
