<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <span>CATEGORIAS</span>
        @if(isset($categoriaEdit))
        <form action="/categorias/save" method="post">
            <div>

                <span>Título</span>
                <input type="text" name="titulo" value="{{$categoriaEdit->titulo}}"/>
            </div>
            <div>
                <span>Descricao</span>
                <input type="text" name="descricao" value="{{$categoriaEdit->descricao}}"/>
            </div>
            <div>
                <input type="hidden" name="id" value="{{$categoriaEdit->id}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit"/>
            </div>
        </form>
        @else
        <form action="/categorias/create" method="post">
            <div>
                <span>Titulo</span>
                <input type="text" name="titulo"/>
            </div>
            <div>
                <span>Descricao</span>
                <input type="text" name="descricao"/>
            </div>
            <div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit"/>
            </div>
        </form>
        @endif

        <table>
            <tr>
                <th>Titulo</th>
                <th>Descricao</th>
                <th></th>
                <th></th>
            </tr>
        @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->titulo}}</td>
            <td>{{$categoria->descricao}}</td>
            <td><a href="/categorias/delete/{{$categoria->id}}">Delete</a></td>
            <td><a href="/categorias/edit/{{$categoria->id}}">Edit</a></td>
          </tr>
        @endforeach
        </table>

    </body>
</html>