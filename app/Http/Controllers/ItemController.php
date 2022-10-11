<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index(){
        $itens = Item::All();
        return view('itens.index', ['itens'=>$itens]);
    }

    public function create() {
        return view('itens.create');
    }

    public function store(ItemRequest $request) {
        $novo_item = $request->all();
        Item::create($novo_item);

        return redirect()->route('itens');
    }

    public function destroy($id) {
        Item::find($id)->delete();
        return redirect()->route('itens');
    }

    public function edit($id) {
        $item = Item::find($id);
        return view('itens.edit', compact('item'));
    }

    public function update(ItemRequest $request, $id) {
        Item::find($id)->update($request->all());
        return redirect()->route('itens');
    }
}
