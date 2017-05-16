@extends('partials.base')

@section('title')
    Questões
@endsection

@section('body')

<div class="container">
    <h1>Cadastro de questões (blade)</h1>
    <div class="row">
        @if(isset($questaoEdit))
            @include('questoes.partials.formEdit',['categorias' => $categorias, 'questaoEdit' => $questaoEdit])
        @else
            @include('questoes.partials.formCreate',['categorias' => $categorias])
        @endif
    </div>

    <div class="row padding-top-50">
        @include('questoes.partials.table',['items' => $questoes])
    </div>

</div>

@endsection

@section('js')

@endsection