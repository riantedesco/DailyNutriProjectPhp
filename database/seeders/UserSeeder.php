<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Administrador do sistema', 'cpf' => '00000000000', 'dataNascimento' => '2000-01-01', 'genero' => 'Masculino', 'peso' => 0.00, 'altura' => 0.00, 'tipoCadastro' => 'Administrador', 'email' => 'administrador@email.com', 'password' => Hash::make('12345678')]);
        User::create(['name' => 'Rian Tedesco', 'cpf' => '99999999999', 'dataNascimento' => '2002-03-30', 'genero' => 'Masculino', 'peso' => 60.00, 'altura' => 1.72, 'tipoCadastro' => 'Usuario', 'email' => 'rct.tedesco@gmail.com', 'password' => Hash::make('12345678')]);
    }
}
