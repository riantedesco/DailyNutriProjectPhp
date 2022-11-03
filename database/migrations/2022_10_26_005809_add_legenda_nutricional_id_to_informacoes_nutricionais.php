<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLegendaNutricionalIdToInformacoesNutricionais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informacoesNutricionais', function (Blueprint $table) {
            $table->bigInteger('legendaNutricional_id')->unsigned()->nullable();
            $table->foreign('legendaNutricional_id')->references('id')->on('legendasNutricionais');
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
