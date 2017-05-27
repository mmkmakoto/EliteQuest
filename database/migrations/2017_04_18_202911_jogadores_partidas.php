<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JogadoresPartidas extends Migration
{
    public function up(){
        Schema::create('jogadores_partidas', function (Blueprint $table) {
            $table->integer('partida_id')->unsigned();
            $table->integer('jogador_id')->unsigned();
            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('jogador_id')->references('id')->on('jogadores');
        });
    }
    public function down()
    {
        Schema::dropIfExists('jogadores_partidas');
    }
}
