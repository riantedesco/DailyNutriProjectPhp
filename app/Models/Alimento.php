<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = "alimentos";
    protected $fillable = ['nome', 'quantidadePorcao', 'unidadeMedida', 'referencialMedida'];

    public function informacoesNutricionais() {
        return $this->hasMany("App\Models\InformacaoNutricional");
    }

    public function itens() {
        return $this->hasMany("App\Models\Item");
    }

}
