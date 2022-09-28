<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = "refeicoes";
    protected $fillable = ['titulo', 'descricao', 'dataHora', 'pessoa'];
}
