<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rodada;
use App\Models\Dificuldade;
use App\Models\Jogador;
use App\Models\Tema;
class Partida extends Model
{
	protected $table = "partidas";
	protected $fillable = [
	    'dificuldade_id',
	    'vencedor_id',
		'ordem_de_turno',
		'sala_id',
		'encerrada',
	];
	public function dificuldade(){
		return $this->belongsTo(Dificuldade::class);
	}
	public function vencedor(){
		return $this->belongsTo(Jogador::class, 'vencedor_id', 'id');
	}
	public function rodadas(){
		return $this->hasMany(Rodada::class);
	}
	public function jogadores(){
		return $this->belongsToMany(Jogador::class, 'jogadores_partidas','partida_id', 'jogador_id');
	}
	public function temas(){
		return $this->belongsToMany(Tema::class, 'partidas_temas', 'partida_id', 'tema_id');
	}
}