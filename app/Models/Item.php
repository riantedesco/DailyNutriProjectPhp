<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "itens";
    protected $fillable = ['refeicao_id', 'alimento_id', 'quantidade'];

    public function alimento() {
        return $this->belongsTo("App\Models\Alimento");
    }

    public function refeicao() {
        return $this->belongsTo("App\Models\Refeicao");
    }
}
