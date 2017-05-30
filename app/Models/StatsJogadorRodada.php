<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Rodada;
use App\Models\Jogador;

class StatsJogadorRodada extends Model
{
	protected $table = "stats_jogador_rodada";
	protected $fillable = [
	    'fichas',
	    'posicao',
	    'rodada_id',
	    'jogador_id',
	];
	public function jogador(){
		return $this->belongsTo(Jogador::class,'jogador_id','id');
	}
	public function rodada(){
		return $this->belongsTo(Rodada::class);
	}
}
