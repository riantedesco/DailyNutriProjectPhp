<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefeicaoIdToItens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itens', function (Blueprint $table) {
            $table->bigInteger('refeicao_id')->unsigned()->nullable();
            $table->foreign('refeicao_id')->references('id')->on('refeicoes');
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
        Schema::table('itens', function (Blueprint $table) {
            //
        });
    }
}
