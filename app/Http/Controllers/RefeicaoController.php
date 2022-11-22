<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use App\Http\Requests\RefeicaoRequest;
use App\Models\Item;

class RefeicaoController extends Controller
{
    public function index(){
        $refeicoes = Refeicao::orderBy('dataHora', 'DESC')->paginate(4);
        return view('refeicoes.index', ['refeicoes'=>$refeicoes]);
    }

    public function create() {
        return view('refeicoes.create');
    }

    public function store(RefeicaoRequest $request) {
        $nova_refeicao = $request->all();
        Refeicao::create($nova_refeicao);
    
        return redirect()->route('refeicoes');
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
