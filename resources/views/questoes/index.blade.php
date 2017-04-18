<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <span>QUESTÕES</span>

        @if(isset($questaoEdit))
        <form action="/questoes/save" method="post">
            <div>
                <span>categoria_id</span>
                <input type="text" name="categoria_id" value="{{$questaoEdit->categoria_id}}"/>
            </div>
            <div>
                <span>titulo</span>
                <input type="text" name="titulo" value="{{$questaoEdit->titulo}}"/>
            </div>
            <div>
                <span>opcao_2</span>
                <input type="text" name="opcao_2" value="{{$questaoEdit->opcao_2}}"/>
            </div>
            <div>
                <span>opcao_3</span>
                <input type="text" name="opcao_3" value="{{$questaoEdit->opcao_3}}"/>
            </div>
            <div>
                <span>opcao_4</span>
                <input type="text" name="opcao_4" value="{{$questaoEdit->opcao_4}}"/>
            </div>
            <div>
                <span>status</span>
                <input type="text" name="status" value="{{$questaoEdit->status}}"/>
            </div>
            <div>
                <input type="hidden" name="id" value="{{$questaoEdit->id}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit"/>
            </div>

        </form>
        @else
        <form action="/questoes/create" method="post">
            <div>
                <span>categoria_id</span>
                <input type="text" name="categoria_id"/>
            </div>
            <div>
                <span>titulo</span>
                <input type="text" name="titulo"/>
            </div>
            <div>
                <span>opcao_2</span>
                <input type="text" name="opcao_2"/>
            </div>
            <div>
                <span>opcao_3</span>
                <input type="text" name="opcao_3"/>
            </div>
            <div>
                <span>opcao_4</span>
                <input type="text" name="opcao_4"/>
            </div>
            <div>
                <span>status</span>
                <input type="text" name="status"/>
            </div>
            <div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit"/>
            </div>

        </form>
        @endif
        <table>
          <tr>
            <th>categoria_id</th>
            <th>titulo</th>
            <th>opcao_2</th>
            <th>opcao_3</th>
            <th>opcao_4</th>
            <th>status</th>
            <th></th>
            <th></th>
          <tr>
        @foreach($questoes as $questao)
          <tr>
            <td>{{$questao->categoria_id}}</td>
            <td>{{$questao->titulo}}</td>
            <td>{{$questao->opcao_2}}</td>
            <td>{{$questao->opcao_3}}</td>
            <td>{{$questao->opcao_4}}</td>
            <td>{{$questao->status}}</td>
            <td><a href="/questoes/delete/{{$questao->id}}">Delete</a></td>
            <td><a href="/questoes/edit/{{$questao->id}}">Edit</a></td>
          <tr>
        @endforeach
        </table>
    </body>
</html>