<table class="painel">
    <tr>
        @foreach($titulos as $titulo => $valor)
            <th>{{$titulo}}</th>
        @endforeach
        <th></th>
        <th></th>
    <tr>
    @foreach($items as $item)
        <tr>
            @foreach($titulos as $valor)
                @if(is_callable($valor))
                    <td>{{$valor($item)}}</td>
                @else
                    <td>{{$item->$valor}}</td>
                @endif
            @endforeach
            <td><a href="/questoes/delete/{{$item->id}}">Delete</a></td>
            <td><a href="/questoes/edit/{{$item->id}}">Edit</a></td>
        <tr>
    @endforeach
</table>