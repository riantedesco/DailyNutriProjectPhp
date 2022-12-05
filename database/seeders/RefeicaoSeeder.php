<?php

namespace Database\Seeders;

use App\Models\Refeicao;
use Illuminate\Database\Seeder;

class RefeicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        Refeicao::create(['titulo' => 'Café da manhã', 'descricao' => 'Café da manhã reforçado com empanado e suco', 'dataHora' => '2022-12-05 08:30:00', 'user_id' => 1]);
        Refeicao::create(['titulo' => 'Almoço', 'descricao' => 'Almoço completo', 'dataHora' => '2022-12-05 12:00:00', 'user_id' => 1]);
        Refeicao::create(['titulo' => 'Lanche da tarde', 'descricao' => 'Lanchinho simples', 'dataHora' => '2022-12-05 15:30:00', 'user_id' => 1]);
        Refeicao::create(['titulo' => 'Janta', 'descricao' => 'Jantinha pouco nutreica', 'dataHora' => '2022-12-05 20:00:00', 'user_id' => 1]);
        
        //Rian Tedesco
        Refeicao::create(['titulo' => 'Café da manhã', 'descricao' => 'Café da manhã reforçado com empanado e suco', 'dataHora' => '2022-12-05 08:30:00', 'user_id' => 2]);
        Refeicao::create(['titulo' => 'Almoço', 'descricao' => 'Almoço completo', 'dataHora' => '2022-12-05 12:00:00', 'user_id' => 2]);
        Refeicao::create(['titulo' => 'Janta', 'descricao' => 'Jantinha pouco nutreica', 'dataHora' => '2022-12-05 20:00:00', 'user_id' => 2]);
        
    }
}
