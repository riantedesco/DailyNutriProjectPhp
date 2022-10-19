<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacaoNutricional extends Model
{
    protected $table = "informacoesNutricionais";
    protected $fillable = ['alimento_id', 'valorEnergetico', 'carboidratos', 'proteinas', 'gordurasTotais', 'gordurasSaturadas', 'gordurasTrans', 'gordurasInstauradas', 'colesterol', 'fibraAlimentar', 'sodio', 'calcio', 'ferro', 'zinco', 'vitaminaA', 'vitaminaB', 'vitaminaC', 'vitaminaK', 'vitaminaD'];

    public function alimento() {
        return $this->belongsTo("App\Models\Alimento");
    }

}
