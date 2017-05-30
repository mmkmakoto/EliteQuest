<form action="/questoes/create" method="post" class="form-horizontal">

    @include('partials.selectInput',[
        'label' => 'categoria',
        'name' => 'categoria_id',
        'optionValue' => 'id',
        'optionLabel' => 'titulo',
        'options' => $categorias,
    ])

    @include('partials.textInput',['label'=>'título','name'=>'titulo'])

    @include('partials.textInput',['label'=>'opcao 1','name'=>'opcao_1'])

    @include('partials.textInput',['label'=>'opcao 2','name'=>'opcao_2'])

    @include('partials.textInput',['label'=>'opcao 3','name'=>'opcao_3'])

    @include('partials.textInput',['label'=>'opcao 4','name'=>'opcao_4'])

    @include('partials.textInput',['label'=>'correta (1, 2, 3, 4)','name'=>'opcao_correta'])

    @include('partials.textInput',['label'=>'status','name'=>'status'])

    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <button class="btn btn-default" type="submit">Enviar questão</button>

</form>
