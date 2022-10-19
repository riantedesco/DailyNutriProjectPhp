<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = "alimentos";
    protected $fillable = ['nome', 'unidadeMedida', 'quantidadePorcao'];

    public function informacoesNutricionais() {
        return $this->hasOne("App\Models\InformacaoNutricional");
    }

    public function itens() {
        return $this->hasMany("App\Models\Item");
    }

}
