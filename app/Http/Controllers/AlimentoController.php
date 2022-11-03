<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Http\Requests\AlimentoRequest;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $alimentos = Alimento::orderBy('nome')->paginate(5);
        else
            $alimentos = Alimento::where('nome', 'like', '%'.$filtragem.'%')
                                    ->orderBy('nome')
                                    ->paginate(5)
                                    ->setpath('alimentos?desc_filtro='.$filtragem);
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
        try {
            Alimento::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
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
