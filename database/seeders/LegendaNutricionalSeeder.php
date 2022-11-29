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
        LegendaNutricional::create(['descricao' => 'Valor Energético', 'unidade' => 'quilocalorias (kcal)']); //1
        LegendaNutricional::create(['descricao' => 'Carboidratos', 'unidade' => 'gramas (g)']); //2
        LegendaNutricional::create(['descricao' => 'Proteínas', 'unidade' => 'gramas (g)']); //3
        LegendaNutricional::create(['descricao' => 'Gorduras Totais', 'unidade' => 'gramas (g)']); //4
        LegendaNutricional::create(['descricao' => 'Gorduras Saturadas', 'unidade' => 'gramas (g)']); //5
        LegendaNutricional::create(['descricao' => 'Gorduras Trans', 'unidade' => 'gramas (g)']); //6
        LegendaNutricional::create(['descricao' => 'Gorduras Instauradas', 'unidade' => 'gramas (g)']); //7
        LegendaNutricional::create(['descricao' => 'Colesterol', 'unidade' => 'gramas (g)']); //8
        LegendaNutricional::create(['descricao' => 'Fibra Alimentar', 'unidade' => 'gramas (g)']); //9
        LegendaNutricional::create(['descricao' => 'Sódio', 'unidade' => 'gramas (g)']); //10
        LegendaNutricional::create(['descricao' => 'Cálcio', 'unidade' => 'gramas (g)']); //11
        LegendaNutricional::create(['descricao' => 'Ferro', 'unidade' => 'gramas (g)']); //12
        LegendaNutricional::create(['descricao' => 'Zinco', 'unidade' => 'gramas (g)']); //13
        LegendaNutricional::create(['descricao' => 'Tiamina', 'unidade' => 'gramas (g)']); //14
        LegendaNutricional::create(['descricao' => 'Niacina', 'unidade' => 'gramas (g)']); //15
        LegendaNutricional::create(['descricao' => 'Magnésio', 'unidade' => 'gramas (g)']); //16
        LegendaNutricional::create(['descricao' => 'Cobre', 'unidade' => 'gramas (g)']); //17
        LegendaNutricional::create(['descricao' => 'Vitamina A', 'unidade' => 'miligramas (mg)']); //18
        LegendaNutricional::create(['descricao' => 'Vitamina B3', 'unidade' => 'miligramas (mg)']); //19
        LegendaNutricional::create(['descricao' => 'Vitamina B6', 'unidade' => 'miligramas (mg)']); //20
        LegendaNutricional::create(['descricao' => 'Vitamina B12', 'unidade' => 'miligramas (mg)']); //21
        LegendaNutricional::create(['descricao' => 'Vitamina C', 'unidade' => 'miligramas (mg)']); //22
        LegendaNutricional::create(['descricao' => 'Vitamina D', 'unidade' => 'miligramas (mg)']); //23
        LegendaNutricional::create(['descricao' => 'Vitamina E', 'unidade' => 'miligramas (mg)']); //24
        LegendaNutricional::create(['descricao' => 'Vitamina K', 'unidade' => 'miligramas (mg)']); //25
        LegendaNutricional::create(['descricao' => 'Manganês', 'unidade' => 'gramas (g)']); //26
    }
}
