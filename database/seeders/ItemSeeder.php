<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Café da manhã - Administrador
        Item::create(['refeicao_id' => 1, 'alimento_id' => 2, 'quantidade' => 100]);
        Item::create(['refeicao_id' => 1, 'alimento_id' => 4, 'quantidade' => 200]);
        
        //Almoço - Administrador
        Item::create(['refeicao_id' => 2, 'alimento_id' => 1, 'quantidade' => 150]);
        Item::create(['refeicao_id' => 2, 'alimento_id' => 3, 'quantidade' => 90]);
        Item::create(['refeicao_id' => 2, 'alimento_id' => 4, 'quantidade' => 200]);
        Item::create(['refeicao_id' => 2, 'alimento_id' => 5, 'quantidade' => 35]);
        
        //Lanche da tarde - Administrador
        Item::create(['refeicao_id' => 3, 'alimento_id' => 6, 'quantidade' => 170]);

        //Janta - Administrador
        Item::create(['refeicao_id' => 4, 'alimento_id' => 1, 'quantidade' => 130]);
        Item::create(['refeicao_id' => 4, 'alimento_id' => 2, 'quantidade' => 100]);
        Item::create(['refeicao_id' => 4, 'alimento_id' => 3, 'quantidade' => 75]);
        Item::create(['refeicao_id' => 4, 'alimento_id' => 4, 'quantidade' => 175]);

        //Café da manhã - Rian Tedesco
        Item::create(['refeicao_id' => 5, 'alimento_id' => 2, 'quantidade' => 100]);
        Item::create(['refeicao_id' => 5, 'alimento_id' => 4, 'quantidade' => 200]);
        
        //Almoço - Rian Tedesco
        Item::create(['refeicao_id' => 6, 'alimento_id' => 1, 'quantidade' => 150]);
        Item::create(['refeicao_id' => 6, 'alimento_id' => 3, 'quantidade' => 90]);
        Item::create(['refeicao_id' => 6, 'alimento_id' => 4, 'quantidade' => 200]);
        Item::create(['refeicao_id' => 6, 'alimento_id' => 5, 'quantidade' => 35]);

        //Janta - Rian Tedesco
        Item::create(['refeicao_id' => 7, 'alimento_id' => 1, 'quantidade' => 130]);
        Item::create(['refeicao_id' => 7, 'alimento_id' => 2, 'quantidade' => 100]);
        Item::create(['refeicao_id' => 7, 'alimento_id' => 3, 'quantidade' => 75]);
        Item::create(['refeicao_id' => 7, 'alimento_id' => 4, 'quantidade' => 175]);
    }
}
