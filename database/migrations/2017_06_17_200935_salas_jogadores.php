<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalasJogadores extends Migration
{
    public function up(){
        Schema::create('salas_jogadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jogador_id')->unsigned();
            $table->integer('sala_id')->unsigned();
            $table->timestamps();
            $table->foreign('jogador_id')->references('id')->on('jogadores');
            $table->foreign('sala_id')->references('id')->on('salas');
        });
    }
    public function down()
    {
        Schema::dropIfExists('salas_jogadores');
    }
}
