<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Questao extends Model
{
	protected $table = "respostas";
	protected $fillable = [
	    'resposta',
	    'pergunta_id',
	    'correta',
	];
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}
