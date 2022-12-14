<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use App\Http\Requests\RefeicaoRequest;
use App\Models\Alimento;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefeicaoController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('dataHora_filtro');
        if ($filtragem == null)
            $refeicoes = Refeicao::orderBy('dataHora', 'DESC')->paginate(3);
        else
            $refeicoes = Refeicao::where('dataHora', 'like', '%'.$filtragem.'%')
                                    ->orderBy('dataHora', 'DESC')
                                    ->paginate(3)
                                    ->setpath('refeicoes?dataHora_filtro='.$filtragem);
            return view('refeicoes.index', ['refeicoes'=>$refeicoes]);

    }

    public function create() {
        return view('refeicoes.create');
    }

    public function store(RefeicaoRequest $request) {
        $nova_refeicao = $request->all();
        Refeicao::create($nova_refeicao);

        $refeicao = Refeicao::orderBy('id', 'desc')->first();
        $itens = Item::where('refeicao_id', $refeicao->id)->orderBy('id')->paginate(6);
        $alimentos = Alimento::all();
    
        return view('itens.index', ['itens'=>$itens, 'refeicao'=>$refeicao, 'alimentos'=>$alimentos]);
    }

    public function destroy($id) {
        try {
            Item::where('refeicao_id', $id)->delete();
            Refeicao::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
        $refeicao = Refeicao::find($id);
        return view('refeicoes.edit', compact('refeicao'));
    }

    public function update(RefeicaoRequest $request, $id) {
        Refeicao::find($id)->update($request->all());
        return redirect()->route('refeicoes');
    }
}
