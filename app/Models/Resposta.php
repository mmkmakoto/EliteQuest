<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pergunta;
use App\Models\Rodada;

class Resposta extends Model
{
	protected $table = "respostas";
	protected $fillable = [
	    'resposta',
	    'pergunta_id',
	    'correta',
	];
	public function pergunta(){
		return $this->belongsTo(Pergunta::class);
	}
	public function rodadas(){
		return $this->hasMany(Rodada::class);
	}
}
