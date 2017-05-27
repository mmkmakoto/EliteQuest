<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Questao extends Model
{
	protected $table = "perguntas";
	protected $fillable = [
	    'pergunta',
	    'dificuldade_id',
	    'tema_id',
	];
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}
