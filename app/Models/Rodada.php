<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Resposta;
use App\Models\Pergunta;
use App\Models\Jogador;
use App\Models\Partida;
use App\Models\StatsJogadorRodada;
class Rodada extends Model
{
	protected $table = "rodadas";
	protected $fillable = [
	    'partida_id',
	    'pergunta_id',
	    'resposta_id',
	    'jogador_id',
	    'fichas',
	    'posicao',
	];
	public function resposta(){
		return $this->belongsTo(Resposta::class);
	}
	public function pergunta(){
		return $this->belongsTo(Pergunta::class);
	}
	public function jogador(){
		return $this->belongsTo(Jogador::class,'jogador_id','id');
	}
	public function partida(){
		return $this->belongsTo(Partida::class);
	}
	public function statsJogadores(){
		return $this->hasMany(StatsJogadorRodada::class,'rodada_id','id');
	}
}
