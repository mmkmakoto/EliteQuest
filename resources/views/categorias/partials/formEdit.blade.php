<form action="/categorias/save" method="post">

        @include('partials.textInput',['label'=>'Título','name'=>'titulo','value'=>$categoriaEdit->titulo ])

        @include('partials.textInput',['label'=>'Descrição','name'=>'descricao','value'=>$categoriaEdit->descricao])

        <input type="hidden" name="id" value="{{$categoriaEdit->id}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <button class="btn btn-default" type="submit">Salvar alterações</button>

</form>