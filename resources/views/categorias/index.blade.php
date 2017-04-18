<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .painel {
                padding: 20px;
                box-shadow: 0.5px 0.5px 10px -3.5px #000;
                display: table;
            }
            .cabecalho {
                padding: 20px;
                box-shadow: 0.5px 0.5px 10px -3.5px #000;
                background: #000;
                color: #fff;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .meia {
                width: 50%;
                background: #fafafa;
            }
        </style>
    </head>
    <body>
        <div class="cabecalho">
            <span>CATEGORIAS</span>
        </div>
        <div class="painel">
        @if(isset($categoriaEdit))
        <form action="/categorias/save" method="post">
            <div>
                <div class="meia">
                    <span>Título</span>
                </div>
                <div class="meia">
                    <input type="text" name="titulo" value="{{$categoriaEdit->titulo}}"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>Descricao</span>
                </div>
                <div class="meia">
                    <input type="text" name="descricao" value="{{$categoriaEdit->descricao}}"/>
                </div>
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
                <div class="meia">
                    <span>Titulo</span>
                </div>
                <div class="meia">
                    <input type="text" name="titulo"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>Descricao</span>
                </div>
                <div class="meia">
                    <input type="text" name="descricao"/>
                </div>
            </div>
            <div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit"/>
            </div>
        </form>
        @endif
        </div>
        <table class="painel">
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