<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";
    protected $fillable = ['nome', 'cpf', 'dataNascimento', 'genero', 'peso', 'altura', 'tipoCadastro', 'usuario', 'senha'];
}
