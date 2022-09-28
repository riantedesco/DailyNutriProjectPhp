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

        return redirect('itens');
    }
}
