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
        LegendaNutricional::create(['descricao' => 'Magnésio', 'unidadeMedida' => 'gramas (g)']); //16
        LegendaNutricional::create(['descricao' => 'Cobre', 'unidadeMedida' => 'gramas (g)']); //17
        LegendaNutricional::create(['descricao' => 'Vitamina A', 'unidadeMedida' => 'miligramas (mg)']); //18
        LegendaNutricional::create(['descricao' => 'Vitamina B3', 'unidadeMedida' => 'miligramas (mg)']); //19
        LegendaNutricional::create(['descricao' => 'Vitamina B6', 'unidadeMedida' => 'miligramas (mg)']); //20
        LegendaNutricional::create(['descricao' => 'Vitamina B12', 'unidadeMedida' => 'miligramas (mg)']); //21
        LegendaNutricional::create(['descricao' => 'Vitamina C', 'unidadeMedida' => 'miligramas (mg)']); //22
        LegendaNutricional::create(['descricao' => 'Vitamina D', 'unidadeMedida' => 'miligramas (mg)']); //23
        LegendaNutricional::create(['descricao' => 'Vitamina E', 'unidadeMedida' => 'miligramas (mg)']); //24
        LegendaNutricional::create(['descricao' => 'Vitamina K', 'unidadeMedida' => 'miligramas (mg)']); //25
        LegendaNutricional::create(['descricao' => 'Manganês', 'unidadeMedida' => 'gramas (g)']); //26
    }
}
