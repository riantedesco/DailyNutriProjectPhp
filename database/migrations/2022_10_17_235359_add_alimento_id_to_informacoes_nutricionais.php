<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlimentoIdToInformacoesNutricionais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informacoesNutricionais', function (Blueprint $table) {
            $table->bigInteger('alimento_id')->unsigned()->nullable();
            $table->foreign('alimento_id')->references('id')->on('alimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informacoesNutricionais', function (Blueprint $table) {
            //
        });
    }
}
