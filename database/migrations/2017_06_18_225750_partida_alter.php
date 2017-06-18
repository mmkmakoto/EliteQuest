<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidaAlter extends Migration
{
    public function up(){
        Schema::table('partidas', function (Blueprint $table) {
           $table->integer('sala_id')->unsigned();
           //$table->foreign('sala_id')->references('id')->on('salas');
        });
    }
    public function down()
    {
        // Schema::table('partidas', function (Blueprint $table) {
        //     $table->dropColumn('sala_id');
        // });
    }
}
