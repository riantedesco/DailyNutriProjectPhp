<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacaoNutricional extends Model
{
    protected $table = "informacoesNutricionais";
    protected $fillable = ['alimento_id', 'legendaNutricional_id', 'quantidade', 'valorDiario'];

    public function alimento() {
        return $this->belongsTo("App\Models\Alimento");
    }
    
    public function legendaNutricional() {
        return $this->belongsTo("App\Models\LegendaNutricional");
    }

}
