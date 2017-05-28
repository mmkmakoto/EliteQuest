<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perguntas extends Migration
{
    public function up(){
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pergunta');
            $table->integer('dificuldade_id')->unsigned();
            $table->integer('tema_id')->unsigned();

            $table->timestamps();
            

            $table->foreign('dificuldade_id')->references('id')->on('dificuldades');
            $table->foreign('tema_id')->references('id')->on('temas');
        });
    }
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}
