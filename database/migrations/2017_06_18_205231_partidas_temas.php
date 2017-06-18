<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidasTemas extends Migration
{
    public function up(){
        Schema::create('partidas_temas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partida_id')->unsigned();
            $table->integer('tema_id')->unsigned();

            $table->foreign('partida_id')->references('id')->on('partidas');
            $table->foreign('tema_id')->references('id')->on('temas');
        });
    }
    public function down()
    {
        Schema::dropIfExists('partidas_temas');
    }
}
