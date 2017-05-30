<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tema;
use App\Models\Dificuldade;
use App\Models\Rodada;
use App\Models\Resposta;
class Pergunta extends Model
{
	protected $table = "perguntas";
	protected $fillable = [
	    'pergunta',
	    'dificuldade_id',
	    'tema_id',
	];
	public function tema(){
		return $this->belongsTo(Tema::class);
	}
	public function dificuldade(){
		return $this->belongsTo(Dificuldade::class);
	}
	public function rodadas(){
		return $this->hasMany(Rodada::class);
	}
	public function respostas(){
		return $this->hasMany(Resposta::class);
	}
}
