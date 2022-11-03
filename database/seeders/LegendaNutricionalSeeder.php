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
        LegendaNutricional::create(['descricao' => 'Valor Energético', 'unidadeMedida' => 'Quilocaloria (kcal)']);
        LegendaNutricional::create(['descricao' => 'Carboidratos', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Proteínas', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Totais', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Saturadas', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Trans', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Gorduras Instauradas', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Colesterol', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Fibra Alimentar', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Sódio', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Cálcio', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Ferro', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Zinco', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina A', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina B', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina C', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina D', 'unidadeMedida' => 'Grama (g)']);
        LegendaNutricional::create(['descricao' => 'Vitamina K', 'unidadeMedida' => 'Grama (g)']);
        
    }
}
