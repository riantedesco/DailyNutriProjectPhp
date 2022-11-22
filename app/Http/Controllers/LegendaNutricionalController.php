<?php

namespace App\Http\Controllers;

use App\Models\LegendaNutricional;
use App\Http\Requests\LegendaNutricionalRequest;

class LegendaNutricionalController extends Controller
{
    public function index(){
        $legendasNutricionais = LegendaNutricional::orderBy('descricao')->paginate(8);
        return view('legendasNutricionais.index', ['legendasNutricionais'=>$legendasNutricionais]);
    }

    public function create() {
        return view('legendasNutricionais.create');
    }

    public function store(LegendaNutricionalRequest $request) {
        $nova_legendaNutricional = $request->all();
        LegendaNutricional::create($nova_legendaNutricional);

        return redirect()->route('legendasNutricionais');
    }

    public function destroy($id) {
        try {
            LegendaNutricional::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
        $legendaNutricional = LegendaNutricional::find($id);
        return view('legendasNutricionais.edit', compact('legendaNutricional'));
    }

    public function update(LegendaNutricionalRequest $request, $id) {
        LegendaNutricional::find($id)->update($request->all());
        return redirect()->route('legendasNutricionais');
    }
}
