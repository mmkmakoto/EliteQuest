<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Partida extends Model
{
	protected $table = "partidas";
	protected $fillable = [
	    'dificuldade_id',
	    'vencedor_id',
	];
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}