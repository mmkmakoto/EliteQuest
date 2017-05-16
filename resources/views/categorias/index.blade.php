@extends('partials.base')

@section('title')
    categorias
@endsection

@section('body')

<div class="container">
    <h1>Cadastro de categorias (blade)</h1>
    <div class="row">
        @if(isset($categoriaEdit))
            @include('categorias.partials.formEdit',['categoriaEdit' => $categoriaEdit])
        @else
            @include('categorias.partials.formCreate')
        @endif
    </div>

    <div class="row padding-top-50">
        @include('categorias.partials.table',['categorias' => $categorias])
    </div>
</div>

@endsection

@section('js')

@endsection