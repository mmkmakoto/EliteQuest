<?php

use Illuminate\Database\Seeder;
use App\Models\Partida;
use App\Models\Dificuldade;
use App\Models\Jogador;
class PartidaSeeder extends Seeder
{
    public function run()
    {
    	$partida = Partida::create([
    		'dificuldade_id' => Dificuldade::where('nome','fácil')->first()->id,
    		'vencedor_id' => null,
    	]);
    	$partida->jogadores()->sync(Jogador::all());

    	$partida = Partida::create([
    		'dificuldade_id' => Dificuldade::where('nome','médio')->first()->id,
    		'vencedor_id' => null,
    	]);
    	$partida->jogadores()->sync(Jogador::all());

    	$partida = Partida::create([
    		'dificuldade_id' => Dificuldade::where('nome','difícil')->first()->id,
    		'vencedor_id' => null,
    	]);
    	$partida->jogadores()->sync(Jogador::all());
    }
}
