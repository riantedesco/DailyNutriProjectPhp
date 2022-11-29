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
        Alimento::create(['nome' => 'Arroz branco', 'quantidade' => 50, 'unidade' => 'gramas', 'referencial' => '1/4 xícara de chá']);
        Alimento::create(['nome' => 'Steak empanado de frango', 'quantidade' => 100, 'unidade' => 'gramas', 'referencial' => '1 unidade']);
        Alimento::create(['nome' => 'Feijão preto', 'quantidade' => 60, 'unidade' => 'gramas', 'referencial' => '1/2 xícara de chá']);
        Alimento::create(['nome' => 'Suco de uva', 'quantidade' => 200, 'unidade' => 'mililitros', 'referencial' => '1 copo']);
        Alimento::create(['nome' => 'Alface americana', 'quantidade' => 100, 'unidade' => 'gramas', 'referencial' => 'N/A']);
        Alimento::create(['nome' => 'Iogurte natural', 'quantidade' => 170, 'unidade' => 'gramas', 'referencial' => '1 unidade']);
    }
}
