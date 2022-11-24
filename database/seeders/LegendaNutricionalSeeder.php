<?php

namespace Database\Seeders;

use App\Models\LegendaNutricional;
use Illuminate\Database\Seeder;

class LegendaNutricionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LegendaNutricional::create(['descricao' => 'Valor Energético', 'unidadeMedida' => 'quilocalorias (kcal)']); //1
        LegendaNutricional::create(['descricao' => 'Carboidratos', 'unidadeMedida' => 'gramas (g)']); //2
        LegendaNutricional::create(['descricao' => 'Proteínas', 'unidadeMedida' => 'gramas (g)']); //3
        LegendaNutricional::create(['descricao' => 'Gorduras Totais', 'unidadeMedida' => 'gramas (g)']); //4
        LegendaNutricional::create(['descricao' => 'Gorduras Saturadas', 'unidadeMedida' => 'gramas (g)']); //5
        LegendaNutricional::create(['descricao' => 'Gorduras Trans', 'unidadeMedida' => 'gramas (g)']); //6
        LegendaNutricional::create(['descricao' => 'Gorduras Instauradas', 'unidadeMedida' => 'gramas (g)']); //7
        LegendaNutricional::create(['descricao' => 'Colesterol', 'unidadeMedida' => 'gramas (g)']); //8
        LegendaNutricional::create(['descricao' => 'Fibra Alimentar', 'unidadeMedida' => 'gramas (g)']); //9
        LegendaNutricional::create(['descricao' => 'Sódio', 'unidadeMedida' => 'gramas (g)']); //10
        LegendaNutricional::create(['descricao' => 'Cálcio', 'unidadeMedida' => 'gramas (g)']); //11
        LegendaNutricional::create(['descricao' => 'Ferro', 'unidadeMedida' => 'gramas (g)']); //12
        LegendaNutricional::create(['descricao' => 'Zinco', 'unidadeMedida' => 'gramas (g)']); //13
        LegendaNutricional::create(['descricao' => 'Tiamina', 'unidadeMedida' => 'gramas (g)']); //14
        LegendaNutricional::create(['descricao' => 'Niacina', 'unidadeMedida' => 'gramas (g)']); //15
        LegendaNutricional::create(['descricao' => 'Vitamina A', 'unidadeMedida' => 'gramas (g)']); //16
        LegendaNutricional::create(['descricao' => 'Vitamina B', 'unidadeMedida' => 'gramas (g)']); //17
        LegendaNutricional::create(['descricao' => 'Vitamina C', 'unidadeMedida' => 'gramas (g)']); //18
        LegendaNutricional::create(['descricao' => 'Vitamina D', 'unidadeMedida' => 'gramas (g)']); //19
        LegendaNutricional::create(['descricao' => 'Vitamina K', 'unidadeMedida' => 'gramas (g)']); //20
        
    }
}
