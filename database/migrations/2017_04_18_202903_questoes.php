<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questoes extends Migration
{
    public function up(){
        Schema::create('questoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('titulo');
            $table->string('opcao_2');
            $table->string('opcao_3');
            $table->string('opcao_4');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
