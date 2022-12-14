<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LegendaNutricionalSeeder::class);
        $this->call(AlimentoSeeder::class);
        $this->call(InformacaoNutricionalSeeder::class);
        $this->call(RefeicaoSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
