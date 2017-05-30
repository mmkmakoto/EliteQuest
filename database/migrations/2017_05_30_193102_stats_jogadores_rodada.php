<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatsJogadoresRodada extends Migration
{
    public function up(){
        Schema::create('stats_jogadores_rodadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fichas');
            $table->integer('posicao')->default(0);
            $table->integer('rodada_id')->unsigned();
            $table->integer('jogador_id')->unsigned();
            $table->timestamps();
            $table->foreign('rodada_id')->references('id')->on('rodadas');
            $table->foreign('jogador_id')->references('id')->on('jogadores');
        });
    }
    public function down()
    {
        Schema::dropIfExists('stats_jogadores_rodadas');
    }
}