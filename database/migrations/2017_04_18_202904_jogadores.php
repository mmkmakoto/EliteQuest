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
            $table->string('email')->unique();;
            $table->string('password');
            $table->string('tipo');
            $table->timestamps();
            $table->rememberToken();
        });
    }
    public function down()
    {
        Schema::dropIfExists('jogadores');
    }
}
