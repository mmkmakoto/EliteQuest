<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rodada;
use App\Models\Partida;
use App\Models\Sala;
use App\User;
class Jogador extends Model
{
	protected $table = "jogadores";
	protected $fillable = [
	    'user_id',
	    'tipo',
	];
	public function rodadas(){
		return $this->hasMany(Rodada::class);
	}
    public function partidasVencidas(){
        return $this->hasMany(Partida::class, 'id', 'vencedor_id');
    }
	public function partidas(){
		return $this->belongsToMany(Partida::class, 'jogadores_partidas', 'jogador_id', 'partida_id');
	}
	public function user(){
		return $this->belongsTo(User::class);
	}
	public function salas(){
		return $this->belongsToMany(Sala::class, 'salas_jogadores', 'jogador_id', 'sala_id');
	}
}