<?php

use Illuminate\Database\Seeder;
use App\Models\Rodada;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Jogador;
use App\Models\Partida;
use App\Models\StatsJogadorRodada;
class RodadasSeeder extends Seeder
{
    public function run()
    {
    	foreach(Partida::all() as $partida){

	    	$perguntas = Pergunta::all()->shuffle();
	    	$jogadores = Jogador::all()->shuffle();
	    	$jogadoresDaPartida = $jogadores;

	    	foreach($jogadores as $jogador)
	    	{
				$pergunta = $perguntas->shift();
		    	$rodada = Rodada::create([
					'pergunta_id' => $pergunta->id,
					'resposta_id' => $pergunta->respostas->random()->id,
					'partida_id' => $partida->id,
					'jogador_id' => $jogador->id,
		    	]);

		    	foreach($jogadoresDaPartida as $jogadorDaPartida)
		    	{
		    		StatsJogadorRodada::create([
		    			'jogador_id' => $jogadorDaPartida->id,
		    			'rodada_id' => $rodada->id,
		    			'posicao' => rand(0,20),
		    			'fichas' => json_encode(collect(range(1,rand(1,5)))->shuffle()->take(rand(1,5))->toArray()),
		    		]);
		    	}
		    }
    	}
    }
}
