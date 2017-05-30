<?php

use Illuminate\Database\Seeder;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Tema;
use App\Models\Dificuldade;
class PerguntasRespostasSeeder extends Seeder
{
    public function run()
    {
    	
		$pergunta = Pergunta::create([
			'pergunta' => 'quanto é 2x3?',
			'tema_id' => Tema::where('nome','matemática')->first()->id,
			'dificuldade_id' => Dificuldade::where('nome','fácil')->first()->id,
		]);

    	Resposta::create([
    		'resposta' => 'a resposta é 6',
    		'correta' => true,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'a resposta é 26',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'a resposta é 63',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'a resposta é 67',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);



		$pergunta = Pergunta::create([
			'pergunta' => 'qual é a capital da República Tcheca',
			'tema_id' => Tema::where('nome','geografia')->first()->id,
			'dificuldade_id' => Dificuldade::where('nome','médio')->first()->id,
		]);

    	Resposta::create([
    		'resposta' => 'Praga',
    		'correta' => true,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'Budapeste',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'Viena',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'Bratislava',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);


		$pergunta = Pergunta::create([
			'pergunta' => 'qual é a marca de papel higiênico mais utilizada na venezuela?',
			'tema_id' => Tema::where('nome','atualidades')->first()->id,
			'dificuldade_id' => Dificuldade::where('nome','difícil')->first()->id,
		]);

    	Resposta::create([
    		'resposta' => 'Não há papel higiênico lá',
    		'correta' => true,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'neve (sem ligações com o Aécio)',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'papel higiênico estatal sem marca',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    	Resposta::create([
    		'resposta' => 'nenhuma das alternativas anteriores',
    		'correta' => false,
    		'pergunta_id' => $pergunta->id,
    	]);
    }
}
