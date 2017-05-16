@extends('partials.base')

@section('title')
    Questões
@endsection

@section('body')

      
<div class="container">
        
    <h1>Cadastro de questões (blade)</h1>

    @if(isset($questaoEdit))

        @include('questoes.partials.formEdit',['categorias' => $categorias, 'questaoEdit' => $questaoEdit])

    @else

        @include('questoes.partials.formCreate',['categorias' => $categorias])

    @endif


    @include('partials.table',['items' => $questoes, 'titulos' => [
        'categoria' => function($questao){ return $questao->categoria->titulo;},
        'titulo' => 'titulo',
        'opcao 2' => 'opcao_2',
        'opcao 3' => 'opcao_3',
        'opcao 4' => 'opcao_4',
        'status' => 'status',
    ]])

</div>
@endsection

@section('js')

@endsection