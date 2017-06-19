<?php

use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Dificuldade;
class PerguntasSociedadeSeeder extends Seeder
{
    public function run()
    {
    	$facil_id = Dificuldade::where('nome','fácil')->first()->id;
		$medio_id = Dificuldade::where('nome','médio')->first()->id;
		$dificil_id = Dificuldade::where('nome','difícil')->first()->id;

		$sociedade_id = Tema::where('nome','Sociedade')->first()->id;

		$pergunta = Pergunta::create([
			'pergunta' => 'Onde nasceu Amy Winehouse?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' => $facil_id,
		]);
 		Resposta::create([
  			'resposta' => 'Londres',
    		'correta' => true,
   			'pergunta_id' => $pergunta->id,
    	]);

		Resposta::create([
			'resposta' => 'São Paulo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Manchester',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Berlim',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Em qual lugar dos EUA nasceu Bruno Mars?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Nova Iorque',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Califórnia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Chicago',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Havaí',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Para que serve o furo embaixo do cadeado?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'para lubrificação apenas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'para lubrificação e escorrer água',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'para abrir o cadeado em caso de perda da chave',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'não serve para nada',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Porque nossos dedos enrugam quando estamos na água?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'reação involuntária do sistema nervoso autônomo do organismo',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'nossa pele é sensível a água',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'nossa pele absorve a água',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'por conta do processo de osmose',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Porque as janelas dos aviões são sempre redondas?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'por conta do design',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'porque é mais bonito',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'não são todas redondas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'para não haver acidentes com cantos vivos',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O que é a parte branca das nossas unhas?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'outra unha',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'a raiz',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'apenas sujeira',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'a cutícula',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o nome do osso da coxa do ser humano?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Rádio',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Tíbia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Fêmur',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Úmero',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quem assinou a lei Áurea em 1888?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Princesa Léia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Princesa Isabel',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Joana D Arc',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Anita Garibaldi',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o nome da apresentadora Xuxa?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Maria dos Santos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Maria do Carmo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Maria das Graças',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Maria de Lourdes',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é a missa rezada no Natal?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Missa do Galo',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Missa de Sétimo Dia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Missa do Vaticano',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Missa de Jesus',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quantos centímetros equivalem a um metro?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => '10',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1000',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '0,1',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '100',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Que animal é o pateta?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Cachorro',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bode',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Boi',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Burro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quantos espaços existem no jogo da velha?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'três',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'quatro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'nove',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'doze',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Tarsila do Amaral era uma:',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Escritora',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Escultora',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Pintora',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Professora',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O que é uma morsa?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Um peixe',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Um mamífero',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Um réptil',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Um crustáceo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual animal representa o signo de Áries?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Carneiro',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Leão',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Peixe',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Touro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quem criou a boneca Emília na literatura?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Walt Disney',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jorge Amado',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Maurício de Souza',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Monteiro Lobato',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Que atriz estreou o fime "A Lagoa Azul"?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);

		Resposta::create([
			'resposta' => 'Milla Jovovich',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Alicia Silverstone',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Julia Roberts',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Brooke Shields',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Em que dia nasceu e em que dia foi registrado o ex-presidente Lula?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);

		Resposta::create([
			'resposta' => '7 e 23 de outubro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '8 e 27 de outubro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '6  e 27 de outubro',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '9 e 26 de outubro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'A que temperatura a água ferve no nível do mar?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);

		Resposta::create([
			'resposta' => '100 C',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '90 C',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '98,5 C',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '110 C',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o idioma mais falado no mundo?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'português',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'inglês',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'mandarim',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'espanhol',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'No Brasil, aproximadamente quantas pessoas vivem sem banheiro em suas casas?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);

		Resposta::create([
			'resposta' => '10 milhões',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '20 milhões',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '8 milhões',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '4 milhões',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quando acabou a Segunda Guerra Mundial?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => '2 de setembro de 1945',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '14 de agosto de 1945',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '8 de março de 1945',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '18 de agosto de 1945',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O criador da primeira imprensa de sucesso foi:',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'Isaac Newton',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Francis Skaryna',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Johannes Gutenberg',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Ivan Fiodorov',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o principal ingrediente do saquê?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'álcool',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'água',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'arroz',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'cana-de-açúcar',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'A canja de galinha é um prato típico:',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'brasileiro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'português',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'indiano',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'chinês',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O croissant foi criado pelos:',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'austríacos',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'alemães',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'franceses',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'holandeses',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Uma bergamota é o mesmo que uma:',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'maçã',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'banana',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'laranja',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'mexerica',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Além do queijo mineiro, qual o outro ingrediente do doce "Romeu e Julieta"?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'doce de leite',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'leite condensado',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'marmelada',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'goiabada',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o estado brasileiro que mais produz cacau?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Amazonas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Pará',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bahia',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Minas Gerais',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O feijão tropeiro é prato típico de qual estado brasileiro?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Minas Gerais',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Mato Grosso',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Espírito Santo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bahia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o nome do azeite famoso na culinária baiana?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'azeite de oliva',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'azeite extra-virgem',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'azeite de dendê',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'azeite de abacate',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quais são os ingredientes de um molho bechamel?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'gema de ovo e manteiga',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'tomate, azeite e manjericão',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'manjericão, azeite, pinoli e queijo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'leite, manteiga e farinha de trigo',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Como é o corte de vegetais em julienne?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'em cubos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'em tirinhas',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'em fatias finas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'em rodelas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O que é clarificar um caldo?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'deixar ferver até quase secar',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'adicionar gelatina incolor',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'adicionar mais água',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'remover a espuma da superfície',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'O que é cortar os legumes em brunoise?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'cortar em tirinhas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'cortar em rodelas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'cortar em cubos',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'cortar em lâminas finas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Em que cidade de Minas Gerais nasceu o cartunista Ziraldo?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Governador Valadares',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Caratinga',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bom Jesus do Galho',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Esmeraldas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Em que ano nasceu e morreu Anita Garibaldi?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => '1821 - 1849',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1840 - 1850',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1839 - 1840',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1838 - 1940',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual era o nome completo de Jorge Amado?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Jorge Amado Leal',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jorge de Faria Amado Leal',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jorge Leal Amado de Faria',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Amado Leal de Faria',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quem foi o criador do biquini?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$dificil_id,
		]);


		Resposta::create([
			'resposta' => 'Louis Réard',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Coco Chanel',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jacques Heim',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Donatella Versace',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Quem fundou a grife Versace?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$medio_id,
		]);


		Resposta::create([
			'resposta' => 'Donatella Versace',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Antonio Versace',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Gianni Versace',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Francesca Versace',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual dessas modelos não é brasileira?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);


		Resposta::create([
			'resposta' => 'Bar Refaeli',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Carol Trentini',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Raquel Zimmermann',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Isabeli Fontana',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
			'pergunta' => 'Qual dessas marcas não é brasileira?',
			'tema_id' => $sociedade_id,
			'dificuldade_id' =>$facil_id,
		]);

		Resposta::create([
			'resposta' => 'Colcci',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Hering',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'John John',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Rolex',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);
	}
}
