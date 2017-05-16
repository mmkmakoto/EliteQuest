<form action="/categorias/create" method="post">

    @include('partials.textInput',['label'=>'Título','name'=>'titulo'])

    @include('partials.textInput',['label'=>'Descrição','name'=>'descricao'])

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button class="btn btn-default" type="submit">Enviar questão</button>
</form>