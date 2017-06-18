<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rodadas extends Migration
{
    public function up(){
        Schema::create('rodadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fichas');
            $table->integer('posicao')->default(0);
            $table->integer('pergunta_id')->unsigned();
            $table->integer('resposta_id')->unsigned()->nullable();
            $table->integer('partida_id')->unsigned();
            $table->integer('jogador_id')->unsigned();

            $table->timestamps();

            $table->foreign('pergunta_id')->references('id')->on('perguntas');
            $table->foreign('resposta_id')->references('id')->on('respostas');
            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('jogador_id')->references('id')->on('jogadores');
        });
    }
    public function down()
    {
        Schema::dropIfExists('rodadas');
    }
}
