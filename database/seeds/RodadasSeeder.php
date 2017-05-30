<?php

use Illuminate\Database\Seeder;
use App\Models\Rodada;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Jogador;
use App\Models\Partida;
class RodadasSeeder extends Seeder
{
    public function run()
    {
    	$perguntas = Pergunta::all()->shuffle();
    	$jogadores = Jogador::all()->shuffle();
    	$partida = Partida::find(1);

		$pergunta = $perguntas->shift();
    	Rodada::create([
			'pergunta_id' => $pergunta->id,
			'resposta_id' => $pergunta->respostas->random()->id,
			'partida_id' => $partida->id,
			'jogador_id' => $jogadores->shift()->id,
    	]);

		$pergunta = $perguntas->shift();
    	Rodada::create([
			'pergunta_id' => $pergunta->id,
			'resposta_id' => $pergunta->respostas->random()->id,
			'partida_id' => $partida->id,
			'jogador_id' => $jogadores->shift()->id,
    	]);

		$pergunta = $perguntas->shift();
    	Rodada::create([
			'pergunta_id' => $pergunta->id,
			'resposta_id' => $pergunta->respostas->random()->id,
			'partida_id' => $partida->id,
			'jogador_id' => $jogadores->shift()->id,
    	]);

		$pergunta = $perguntas->shift();
    	Rodada::create([
			'pergunta_id' => $pergunta->id,
			'resposta_id' => $pergunta->respostas->random()->id,
			'partida_id' => $partida->id,
			'jogador_id' => $jogadores->shift()->id,
    	]);
    }
}
