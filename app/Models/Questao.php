<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
	protected $table = "questoes";
	protected $fillable = [
	    'categoria_id',
	    'titulo',
	    'opcao_2',
	    'opcao_3',
	    'opcao_4',
	    'status',
	];
}
