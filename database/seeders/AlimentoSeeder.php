<?php

namespace Database\Seeders;

use App\Models\Alimento;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alimento::create(['nome' => 'Arroz branco', 'quantidadePorcao' => 50, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1/4 xícara de chá']);
        Alimento::create(['nome' => 'Steak empanado de frango', 'quantidadePorcao' => 100, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1 unidade']);
        Alimento::create(['nome' => 'Feijão preto', 'quantidadePorcao' => 60, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1/2 xícara de chá']);
        Alimento::create(['nome' => 'Suco de uva', 'quantidadePorcao' => 200, 'unidadeMedida' => 'mililitros', 'referencialMedida' => '1 copo']);
        Alimento::create(['nome' => 'Alface americana', 'quantidadePorcao' => 100, 'unidadeMedida' => 'gramas', 'referencialMedida' => 'N/A']);
        Alimento::create(['nome' => 'Iogurte natural', 'quantidadePorcao' => 170, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1 unidade']);
    }
}
