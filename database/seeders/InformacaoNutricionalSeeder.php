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
        InformacaoNutricional::create(['alimento_id' => 1, 'legendaNutricional_id' => 1, 'quantidade' => 0.0, 'valorDiario' => 0.0]);
    }
}
