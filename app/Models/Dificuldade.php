<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pergunta;
use App\Models\Partida;
class Dificuldade extends Model
{
	protected $table = "dificuldades";
	protected $fillable = [
	    'nome',
	];
	public function perguntas(){
		return $this->hasMany(Pergunta::class);
	}
	public function partidas(){
		return $this->hasMany(Partida::class);
	}
}