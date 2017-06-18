<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Partidas extends Migration
{
    public function up(){
        Schema::create('partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ordem_de_turno')->default('');
            
            $table->integer('dificuldade_id')->unsigned();
            $table->integer('vencedor_id')->unsigned()->nullable();
            
            $table->timestamps();

            $table->foreign('dificuldade_id')->references('id')->on('dificuldades');
            $table->foreign('vencedor_id')->references('id')->on('jogadores');
        });
    }
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
