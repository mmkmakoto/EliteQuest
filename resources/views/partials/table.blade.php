<table class="table">
    <tr>
        @foreach($columns as $column)
            <th>{{$column['titulo']}}</th>
        @endforeach
    <tr>
    @foreach($items as $item)
        <tr>
            @foreach($columns as $column)
                @if(is_callable($column['valor']))
                    <td>{!!$column['valor']($item)!!}</td>
                @else
                    {{dump($column['valor'])}}
                    {{dd($item->$column['valor'])}}
                    <td>{{$item->$column['valor']}}</td>
                @endif
            @endforeach
        <tr>
    @endforeach
</table>