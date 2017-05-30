<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pergunta;
class Tema extends Model
{
	protected $table = "temas";
	protected $fillable = [
	    'nome',
	];
	public function perguntas(){
		return $this->hasMany(Pergunta::class);
	}
}
