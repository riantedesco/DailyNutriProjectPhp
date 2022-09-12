<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::All();
        return view('pessoas', ['pessoas'=>$pessoas]);
    }
}
