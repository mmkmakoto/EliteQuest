<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Questao extends Model
{
	protected $table = "temas";
	protected $fillable = [
	    'nome',
	];
	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}
}
