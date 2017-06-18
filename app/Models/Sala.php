<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
	protected $table= "salas";
	protected $fillable = [
		'jogador_id',
		'dificuldade_id',
		'jogadores',
		'aberta',
	];
}
