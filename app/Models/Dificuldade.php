<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
	protected $table = "dificuldades";
	protected $fillable = [
	    'nome',
	];
}