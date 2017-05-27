<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Questao extends Model
{
	protected $table = "rodadas";
	protected $fillable = [
	    'pergunta_id',
	    'resposta_id',
	    'pergunta_id',
	    'jogador_id',
	];
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}
