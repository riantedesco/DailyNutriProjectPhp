<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',100);
            $table->string('cpf',11);
            $table->date('dataNascimento');
            $table->enum('genero', ["Masculino", "Feminino"]);
            $table->double('peso');
            $table->double('altura');
            $table->enum('tipoCadastro', ["Usuario", "Administrador"]);
            $table->string('usuario');
            $table->string('senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
