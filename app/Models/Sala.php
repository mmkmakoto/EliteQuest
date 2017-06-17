<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jogador;
class Sala extends Model
{
	protected $table= "salas";
	protected $fillable = [
		'jogador_id',
		'dificuldade_id',
		'jogadores',
		'aberta',
	];

	public function jogadores(){
		return $this->belongsToMany(Jogador::class,'salas_jogadores','sala_id','jogador_id');
	}
}
