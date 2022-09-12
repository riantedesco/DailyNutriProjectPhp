<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacaoNutricionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacoesNutricionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('alimento');
            $table->double('peso');
            $table->double('valorEnergetico');
            $table->double('carboidratos');
            $table->double('proteinas');
            $table->double('gordurasTotais');
            $table->double('gordurasSaturadas');
            $table->double('gordurasTrans');
            $table->double('gordurasInstauradas');
            $table->double('colesterol');
            $table->double('fibraAlimentar');
            $table->double('sodio');
            $table->double('calcio');
            $table->double('ferro');
            $table->double('zinco');
            $table->double('vitaminaA');
            $table->double('vitaminaB');
            $table->double('vitaminaC');
            $table->double('vitaminaK');
            $table->double('vitaminaD');
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
        Schema::dropIfExists('informacoesNutricionais');
    }
}
