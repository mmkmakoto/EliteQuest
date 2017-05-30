<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Resposta;
use App\Models\Pergunta;
use App\Models\Jogador;
use App\Models\Partida;
class Rodada extends Model
{
	protected $table = "rodadas";
	protected $fillable = [
	    'partida_id',
	    'pergunta_id',
	    'resposta_id',
	    'jogador_id',
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
}
