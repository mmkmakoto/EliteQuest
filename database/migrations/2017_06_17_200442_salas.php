<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salas extends Migration
{
    public function up(){
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jogador_id')->unsigned();
            $table->integer('dificuldade_id')->unsigned();
            $table->integer('max_jogadores')->unsigned();
            $table->boolean('aberta')->default(true);
            $table->timestamps();
            $table->foreign('jogador_id')->references('id')->on('jogadores');
            $table->foreign('dificuldade_id')->references('id')->on('dificuldades');
        });
    }
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
