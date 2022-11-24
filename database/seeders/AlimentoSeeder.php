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
        Alimento::create(['nome' => 'Arroz branco', 'quantidadePorcao' => 50, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1/4 xícara']);
        Alimento::create(['nome' => 'Steak empanado de frango', 'quantidadePorcao' => 100, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1 unidade']);
        Alimento::create(['nome' => 'Feijão preto', 'quantidadePorcao' => 60, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1/2 xícara']);
        Alimento::create(['nome' => 'Suco de uva', 'quantidadePorcao' => 200, 'unidadeMedida' => 'mililitros', 'referencialMedida' => '1 copo']);
        Alimento::create(['nome' => 'Alface americana', 'quantidadePorcao' => 100, 'unidadeMedida' => 'gramas', 'referencialMedida' => '1 folha']);
    }
}
