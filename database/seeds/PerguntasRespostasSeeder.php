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
			'tema_id' => Tema::where('nome','Matemática')->first()->id,
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
			'tema_id' => Tema::where('nome','Geografia')->first()->id,
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
			'tema_id' => Tema::where('nome','Atualidades')->first()->id,
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

        $pergunta = Pergunta::create([
            'pergunta' => 'qual é o sinônimo de jocoso?',
            'tema_id' => Tema::where('nome','Português')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','difícil')->first()->id,
        ]);

        Resposta::create([
            'resposta' => 'Sujo, grudento',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'engraçado, cômico',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'feio, esquisito',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'novo, recente',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

        $pergunta = Pergunta::create([
            'pergunta' => 'qual é o nome do arquiduque cujo assassinato culminou no início da primeira guerra mundial?',
            'tema_id' => Tema::where('nome','História')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','difícil')->first()->id,
        ]);

        Resposta::create([
            'resposta' => 'Otto von Bismarck',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Frédéric Bastiat',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Franz Ferdinand',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ludwig von Mises',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

        $pergunta = Pergunta::create([
            'pergunta' => 'quais são as três leis de newton?',
            'tema_id' => Tema::where('nome','Física')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','fácil')->first()->id,
        ]);

        Resposta::create([
            'resposta' => 'Força, Gravidade e Inércia',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Cálculo Integral, Inércia, Ação e Reação',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Inércia, Gravidade, Ação e Reação',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Inércia, Força, Ação e Reação',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

        $pergunta = Pergunta::create([
            'pergunta' => 'Quais são os presidentes do senado e da câmara federal respectivamente?',
            'tema_id' => Tema::where('nome','Atualidades')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','médio')->first()->id,
        ]);

        Resposta::create([
            'resposta' => 'Eunício Oliveira e Rodrigo Maia',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Eunício Oliveira e Renan Calheiros',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Renan Calheiros e Eduardo Cunha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rodrigo Maia e Eduardo Cunha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

        $pergunta = Pergunta::create([
            'pergunta' => '3! - 2! = ',
            'tema_id' => Tema::where('nome','Matemática')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','fácil')->first()->id,
        ]);

        Resposta::create([
            'resposta' => '4',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '2',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '1',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '0',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);


        $pergunta = Pergunta::create([
            'pergunta' => 'Em qual continente se situa a peninsula Ibérica?',
            'tema_id' => Tema::where('nome','Geografia')->first()->id,
            'dificuldade_id' => Dificuldade::where('nome','médio')->first()->id,
        ]);

        Resposta::create([
            'resposta' => 'África',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ásia',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Europa',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'América',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

    }
}
