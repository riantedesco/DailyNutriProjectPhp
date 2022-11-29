<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegendaNutricional extends Model
{
    protected $table = "legendasNutricionais";
    protected $fillable = ['descricao', 'unidade'];

    public function informacoesNutricionais() {
        return $this->hasMany("App\Models\InformacaoNutricional");
    }

}
