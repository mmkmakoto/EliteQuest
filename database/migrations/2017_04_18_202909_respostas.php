<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Respostas extends Migration
{
    public function up(){
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resposta');
            $table->integer('pergunta_id')->unsigned();
            $table->timestamps();

            $table->foreign('pergunta_id')->references('id')->on('perguntas');
        });
    }
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
