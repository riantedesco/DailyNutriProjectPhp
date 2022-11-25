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
        
        //Steak empanado de frango - 100g
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 1, 'quantidade' => 216, 'valorDiario' => 11]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 2, 'quantidade' => 17, 'valorDiario' => 6]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 3, 'quantidade' => 10, 'valorDiario' => 13]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 4, 'quantidade' => 12, 'valorDiario' => 22]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 5, 'quantidade' => 3.3, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 9, 'quantidade' => 1.6, 'valorDiario' => 6]);
        InformacaoNutricional::create(['alimento_id' => 2, 'legendaNutricional_id' => 10, 'quantidade' => 0.735, 'valorDiario' => 31]);
        
        //Feijão preto - 60g
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 1, 'quantidade' => 194, 'valorDiario' => 10]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 2, 'quantidade' => 41, 'valorDiario' => 14]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 3, 'quantidade' => 9, 'valorDiario' => 12]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 4, 'quantidade' => 0.6, 'valorDiario' => 1]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 5, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 9, 'quantidade' => 11, 'valorDiario' => 44]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 11, 'quantidade' => 0.14, 'valorDiario' => 14]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 16, 'quantidade' => 0.15, 'valorDiario' => 58]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 12, 'quantidade' => 0.011, 'valorDiario' => 79]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 17, 'quantidade' => 0.00053, 'valorDiario' => 59]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 13, 'quantidade' => 0.0011, 'valorDiario' => 16]);
        InformacaoNutricional::create(['alimento_id' => 3, 'legendaNutricional_id' => 10, 'quantidade' => 0.099, 'valorDiario' => 7]);
        
        //Suco de uva - 200mL
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 1, 'quantidade' => 150, 'valorDiario' => 8]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 2, 'quantidade' => 34, 'valorDiario' => 11]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 3, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 4, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 5, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 9, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 10, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 18, 'quantidade' => 0.09, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 19, 'quantidade' => 2.4, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 20, 'quantidade' => 0.19, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 21, 'quantidade' => 0.00036, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 22, 'quantidade' => 6.7, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 23, 'quantidade' => 0.00075, 'valorDiario' => 15]);
        InformacaoNutricional::create(['alimento_id' => 4, 'legendaNutricional_id' => 24, 'quantidade' => 1.5, 'valorDiario' => 15]);
        
        //Alface americana - 100g
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 1, 'quantidade' => 9, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 2, 'quantidade' => 1.7, 'valorDiario' => 1]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 3, 'quantidade' => 0.6, 'valorDiario' => 1]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 4, 'quantidade' => 0.1, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 5, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 9, 'quantidade' => 1, 'valorDiario' => 4]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 10, 'quantidade' => 0.014, 'valorDiario' => 1]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 26, 'quantidade' => 0.019, 'valorDiario' => 842]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 22, 'quantidade' => 0.011, 'valorDiario' => 24]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 20, 'quantidade' => 0.00016, 'valorDiario' => 12]);
        InformacaoNutricional::create(['alimento_id' => 5, 'legendaNutricional_id' => 12, 'quantidade' => 0.007, 'valorDiario' => 52]);
        
        //Iogurte natural - 170g
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 1, 'quantidade' => 126, 'valorDiario' => 6]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 2, 'quantidade' => 9.1, 'valorDiario' => 3]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 3, 'quantidade' => 6.8, 'valorDiario' => 9]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 4, 'quantidade' => 7, 'valorDiario' => 13]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 5, 'quantidade' => 4.4, 'valorDiario' => 20]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 6, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 9, 'quantidade' => 0, 'valorDiario' => 0]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 10, 'quantidade' => 0.126, 'valorDiario' => 5]);
        InformacaoNutricional::create(['alimento_id' => 6, 'legendaNutricional_id' => 11, 'quantidade' => 0.247, 'valorDiario' => 25]);
        
    }
}
