<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rodada;
use App\Models\Dificuldade;
use App\Jogador;
class Partida extends Model
{
	protected $table = "partidas";
	protected $fillable = [
	    'dificuldade_id',
	    'vencedor_id',
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
		return $this->belongsToMany(Jogador::class, 'jogadores_partidas', 'jogador_id', 'partida_id');
	}
}