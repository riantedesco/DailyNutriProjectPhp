<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\ItemRequest;
use App\Models\Alimento;
use App\Models\Refeicao;

class ItemController extends Controller
{
    // public function index($refeicao_id){
    //     $itens = Item::where('refeicao_id', $refeicao_id)->orderBy('id')->paginate(6);
    //     $refeicao = Refeicao::find($refeicao_id);
    //     return view('itens.index', ['itens'=>$itens, 'refeicao'=>$refeicao]);
    // }
    public function index($refeicao_id){
        $itens = Item::where('refeicao_id', $refeicao_id)->orderBy('id')->paginate(6);
        $refeicao = Refeicao::find($refeicao_id);
        $alimentos = Alimento::all();
        return view('itens.index', ['itens'=>$itens, 'refeicao'=>$refeicao, 'alimentos'=>$alimentos]);
    }

    public function create($refeicao_id) {
        $refeicao = Refeicao::find($refeicao_id);
        return view('itens.create', compact('refeicao'));
    }

    public function store(ItemRequest $request) {
        $novo_item = $request->all();
        $itemCriado = Item::create($novo_item);

        return redirect()->route('itens', ['refeicao_id'=>$itemCriado->refeicao_id]);
    }

    public function destroy($id) {
        try {
            Item::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    // public function edit($id) {
    //     $item = Item::find($id);
    //     return view('itens.edit', compact('item'));
    // }
    public function edit($id) {
        $item = Item::find($id);
        $alimentos = Alimento::all();
        return view('itens.edit', compact('item'), ['alimentos'=>$alimentos]);
    }

    public function update(ItemRequest $request, $id) {
        Item::find($id)->update($request->all());
        $item = Item::find($id);
        return redirect()->route('itens', ['refeicao_id'=>$item->refeicao_id]);
    }

}
