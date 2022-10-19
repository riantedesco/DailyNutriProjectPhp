<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = "refeicoes";
    protected $fillable = ['titulo', 'descricao', 'dataHora', 'user_id'];

    public function user() {
        return $this->belongsTo("App\Models\User");
    }

    public function itens() {
        return $this->hasMany("App\Models\Item");
    }

}
