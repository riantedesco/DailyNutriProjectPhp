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
            $table->integer('legendaNutricional');
            $table->double('quantidade');
            $table->double('valorDiario');
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
