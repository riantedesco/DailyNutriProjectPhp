<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveAlimentoToInformacoesNutricionais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informacoesNutricionais', function (Blueprint $table) {
            $table->dropColumn('alimento');
            //
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
            $table->integer('alimento');
        });
    }
}
