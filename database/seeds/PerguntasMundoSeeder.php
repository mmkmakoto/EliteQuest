<?php

use Illuminate\Database\Seeder;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Tema;
use App\Models\Dificuldade;

class PerguntasMundoSeeder extends Seeder
{
    public function run()
    {

    	$facil_id = Dificuldade::where('nome','fácil')->first()->id;
		$medio_id = Dificuldade::where('nome','médio')->first()->id;
		$dificil_id = Dificuldade::where('nome','difícil')->first()->id;

		$mundo_id = Tema::where('nome','Mundo')->first()->id;

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual oceano banha o Brasil?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Oceano Atlântico',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Oceano Pacífico',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Oceano Ártico',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Oceano Índico',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o maior país do mundo em extensão?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'a Índia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Russia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'os Estados Unidos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'o Brasil',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o país mais populoso do mundo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'o Brasil',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Rússia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Índia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a China',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a capital da Austrália?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Canberra',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sidney',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Melbourne',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Adelaide',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o maior deserto do mundo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'o Deserto do Saara',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'o Deserto do Kalahari',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Antartica',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Patagônia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Onde está localizado o ponto mais baixo do mundo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'no subsolo do Cazaquistão',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'entre a Índia e Bangladesh',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'na fronteira entre Israel e Jordânia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'no centro do Nepal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o Vulcão mais ativo no mundo, localizado no Havaí?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'o Etna',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'o Krakatoa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'o K2',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'o Kilauea',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a aurora que ocorre na Antártida?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'a Aurora Boreal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Aurora Meridional',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Aurora Setentrional',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a Aurora Austral',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual a cidade mais populosa do continente americano?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'São Francisco, EUA',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Nova Iorque, EUA',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'São Paulo, Brasil',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Cidade do México, México',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quais os três maiores países das Américas?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Canadá, Estados Unidos e Brasil',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Canadá, Estados Unidos e México',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'México, Brasil e Argentina',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Estados Unidos, México e Brasil',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a escrita criada pelos egípcios?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Cuneiforme',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Acadiano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Hieróglifo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Árabe',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual cidade foi destruída pelo vulcão Vesúvio em 79 d.C.?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Herculano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Nápoles',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Roma',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pompéia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o modo de organização social e político adotado na Europa durante a Idade Média?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Socialismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marxismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Feudalismo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Absolutismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era o tipo de papel usado no Egito antigo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Couché',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Apergaminhado',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Papiro',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Canson',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Onde nasceu Napoleão Bonaparte?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'no Chipre',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'na Sardenha',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'na Córsega',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'em Rodes',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Como era chamado o cargo executivo máximo na Rússia?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Fuhrer',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Chanceler',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Czar',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Imperador',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Que filósofo criou a ideia dos trÊs poderes: Judiciário, Executivo e Legislativo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Maquiavel',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marx',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Hobbes',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Montesquieu',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual dessas Revoluções não ocorreu na Europa?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Revolução Gloriosa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Revolução Farroupilha',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Revolução Industrial',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Revolução Puritana',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o presidente brasileiro deposto na Revolução de 1930?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Floriano Peixoto',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Washington Luís',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Júlio Prestes',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marechal Deodoro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o conflito armado que ocorreu no sul do Brasil entre 1912 e 1916?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Guerra dos Farrapos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Guerra de Canudos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Guerra do Contestado',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Revolução Federalista',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quais foram os navios brasileiros afundados pelos nazistas em 16 de agosto de 1942?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'São Paulo e Minas Gerais',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Itagiba e Araraquara',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Anibal Benevolo e Itagiba',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Baependy e Araraquara',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantos mortos aproximadamente a Segunda Guerra Mundial deixou?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => '15 milhões',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '50 milhões',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '100 milhões',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '20 milhões',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Como era chamada a campanha pelas eleições diretas em 1983?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Diretas Já',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Democracia Agora',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eleições já',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Voto já',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual o nome do movimento de saída da Grã-Betanha da União Européia?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Free Britain',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Great Britain',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'God Save the Queen',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Brexit',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual empresa foi vítima de um escândalo em 2015?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Vale do Rio Doce',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Petrobrás',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Bradesco',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Banco do Brasil',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome da operação da Polícia Federal que visa investigar os principais frigoríficos brasileiros ?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Operação Carne Fraca',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Operação Navalha na carne',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Operação Fome Zero',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Operação Nelore',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual candidato à presidência do Brasil morreu em um acidente aéreo em 2014?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Eduardo Jorge',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eduardo Campos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eduardo Cunha',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eduardo Paes',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual alternativa não corresponde a uma característica da Constituição Brasileira de 1988?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Direito ao Voto',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Proteção aos povos indígenas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Formato das Eleições',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Regime de Bipartidarsmo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantos Atos Institucionais(AIs) foram editados durante a ditadura militar ',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => '5',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '16',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '17',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '20',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em que governo foi implantado o plano Real?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Governo Itamar Franco',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Governo FHC',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Governo Collor',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Governo Lula',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Que importante político morreu em uma queda de Helicóptero em Angra dos Reis em 1992?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Orestes Quércia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Franco Montoro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ulysses Guimarães',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Juscelino Kubtschek',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o primeiro presidente eleito após a Ditadura Militar?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'José Sarney',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Tancredo Neves',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Paulo Maluf',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ernesto Geisel',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o partido político em atividade mais antigo do Brasil?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Partido Democrático Trabalhista(PDT)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Partido Trabalhista Brasileiro(PTB)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Partido do Movimento Democrático Brasileiro(PMDB)',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Partido Trabalhista(PT)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em que ano foi instituída a forma de governo presidencialista no Brasil?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => '1988',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1964',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1891',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1983',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual alternativa não representa uma característica da Economia de Mercado?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Burocratização e centralização do Estado na Economia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Livre concorrência',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Lei da oferta e procura',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Predominância de instituições privadas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quem era o ministro brasileiro da Fazenda quando o plano Real foi criado?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Guido Mantega',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Alexandre Tombini',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Guido Mantega',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fernando Henrique Cardoso',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'A crise financeira mundial em 2008 foi desencadeada por qual banco americano?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Lehman Brothers',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Citigroup',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Goldman Sachs',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Morgan Stanley',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era a moeda brasileira antes do Real?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Cruzado',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Vintém',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Cruzeiro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Cruzeiro Real',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em qual continente está localizado o Egito?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Ásia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Europa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Oceania',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'África',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o país com o maior número de divindades religiosas no mundo?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Grécia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'México',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Índia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Peru',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a cidade conhecida como cidade Luz?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Nova Iorque',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Tóquio',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Londres',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Paris',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em qual país está localizado o Lago de Loch Ness?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Escócia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Irlanda',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Inglaterra',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Grã-Betanha',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Na cordilheira do Himalaia está a mais elevada Montanha do mundo, qual é o seu nome?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Monte Aconcágua',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Everest',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pico da Agulhas Negras',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Monte Taj Mahal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a principal consequência do movimento de rotação da Terra?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'A formação da quatro estações do ano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A formação das chuvas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a formação dos dias e das noites',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a formação dos fenômenos naturais',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);



		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a principal consequência do movimento de translação da Terra?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'A formação das quatro estações do ano',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'a manutenção da temperatura da Terra',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A formação das chuvas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A formação do dia e da noite',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a forma real da Terra?',
		'tema_id' => $mundo_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Redonda',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Plana',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sem forma',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Geoide',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que é a Litosfera?',
		'tema_id' => $mundo_id,
		'dificuldade_id' =>  $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'É o solo onde pisamos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Conjunto de águas de todo o planeta',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'É a camada mais extensa da atmosfera',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'É o conjunto de seres vivos do planeta',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);




    }
}
