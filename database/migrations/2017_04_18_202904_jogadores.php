<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jogadores extends Migration
{
    public function up(){
        Schema::create('jogadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('usuario');
            $table->string('email');
            $table->string('senha');
            $table->string('tipo');
            $table->timestamps(); 
        });
    }
    public function down()
    {
        Schema::dropIfExists('jogadores');
    }
}
