<?php

namespace Database\Seeders;

use App\Models\InformacaoNutricional;
use Illuminate\Database\Seeder;

class InformacaoNutricionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Arroz branco - 50g
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 1, 'quantidade' => 171, 'valorDiario' => 9]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 2, 'quantidade' => 39, 'valorDiario' => 13]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 3, 'quantidade' => 3.7, 'valorDiario' => 5]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 4, 'quantidade' => 0.3, 'valorDiario' => 1]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 5, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 8, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 9, 'quantidade' => 0.8, 'valorDiario' => 3]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 10, 'quantidade' => 0.007, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 14, 'quantidade' => 0.0001, 'valorDiario' => 8]);
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 15, 'quantidade' => 0.0056, 'valorDiario' => 4]);
        
        
    }
}
