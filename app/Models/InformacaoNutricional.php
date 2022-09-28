<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacaoNutricional extends Model
{
    protected $table = "informacoesNutricionais";
    protected $fillable = ['alimento', 'valorEnergetico', 'carboidratos', 'proteinas', 'gordurasTotais', 'gordurasSaturadas', 'gordurasTrans', 'gordurasInstauradas', 'colesterol', 'fibraAlimentar', 'sodio', 'calcio', 'ferro', 'zinco', 'vitaminaA', 'vitaminaB', 'vitaminaC', 'vitaminaK', 'vitaminaD'];
}
