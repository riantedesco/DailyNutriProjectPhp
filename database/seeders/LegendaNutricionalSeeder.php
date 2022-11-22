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
        LegendaNutricional::create(['descricao' => 'Valor Energético', 'unidadeMedida' => 'quilocalorias (kcal)']);
        LegendaNutricional::create(['descricao' => 'Carboidratos', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Proteínas', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Totais', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Saturadas', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Trans', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Instauradas', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Colesterol', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Fibra Alimentar', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Sódio', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Cálcio', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Ferro', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Zinco', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina A', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina B', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina C', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina D', 'unidadeMedida' => 'gramas (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina K', 'unidadeMedida' => 'gramas (g)']);
        
    }
}
