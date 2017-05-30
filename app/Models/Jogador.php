<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Jogador extends Authenticatable
{
    use Notifiable;
	protected $table = "jogadores";
	protected $fillable = [
	    'nome',
	    'usuario',
	    'email',
	    'password',
	    'tipo',
	];

	protected $hidden = [
        'password', 'remember_token',
    ];
}