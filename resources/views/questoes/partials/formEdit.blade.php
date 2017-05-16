<form action="/questoes/save" method="post" class="form-horizontal">

    @include('partials.selectInput',[
        'label' => 'categoria',
        'name' => 'categoria_id',
        'selectedValue' => $questaoEdit->categoria->id,
        'optionValue' => 'id',
        'optionLabel' => 'titulo',
        'options' => $categorias,
    ])
    
    @include('partials.textInput',['label'=>'título','name'=>'titulo','value'=>$questaoEdit->titulo])
    
    @include('partials.textInput',['label'=>'opcao 2','name'=>'opcao_2','value'=>$questaoEdit->opcao_2])
    
    @include('partials.textInput',['label'=>'opcao 3','name'=>'opcao_3','value'=>$questaoEdit->opcao_3])

    @include('partials.textInput',['label'=>'opcao 4','name'=>'opcao_4','value'=>$questaoEdit->opcao_4])

    @include('partials.textInput',['label'=>'status','name'=>'status','value'=>$questaoEdit->status])
    
    <input type="hidden" name="id" value="{{$questaoEdit->id}}"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="submit"/>

</form>