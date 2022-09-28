<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::All();
        return view('pessoas.index', ['pessoas'=>$pessoas]);
    }

    public function create() {
        return view('pessoas.create');
    }

    public function store(PessoaRequest $request) {
        $nova_pessoa = $request->all();
        Pessoa::create($nova_pessoa);

        return redirect('pessoas');
    }
}
