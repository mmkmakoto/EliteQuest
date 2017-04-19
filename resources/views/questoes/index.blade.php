<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Questões</title>
                <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .painel {
                padding: 20px;
                box-shadow: 0.5px 0.5px 10px -3.5px #000;
                display: table;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .cabecalho {
                padding: 20px;
                box-shadow: 0.5px 0.5px 10px -3.5px #000;
                background: #000;
                color: #fff;
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
            <span>QUESTÕES</span>
        </div>
        <div class="painel">
        @if(isset($questaoEdit))
        <form action="/questoes/save" method="post">
            <div>
                <div class="meia">
                    <span>categoria</span>
                </div>
                <div class="meia">
                    <select name="categoria_id">
                    @foreach($categorias as $categoria)
                        @if($questaoEdit->categoria->id == $categoria->id)
                        <option selected value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                        @else
                        <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>titulo</span>
                </div>
                <div class="meia">
                    <input type="text" name="titulo" value="{{$questaoEdit->titulo}}"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 2</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_2" value="{{$questaoEdit->opcao_2}}"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 3</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_3" value="{{$questaoEdit->opcao_3}}"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 4</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_4" value="{{$questaoEdit->opcao_4}}"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>status</span>
                </div>
                <div class="meia">
                    <input type="text" name="status" value="{{$questaoEdit->status}}"/>
                </div>
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
                <div class="meia">
                    <span>categoria</span>
                </div>
                <div class="meia">
                    <select name="categoria_id">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>titulo</span>
                </div>
                <div class="meia">
                    <input type="text" name="titulo"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 2</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_2"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 3</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_3"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>opcao 4</span>
                </div>
                <div class="meia">
                    <input type="text" name="opcao_4"/>
                </div>
            </div>
            <div>
                <div class="meia">
                    <span>status</span>
                </div>
                <div class="meia">
                    <input type="text" name="status"/>
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
            <th>categoria</th>
            <th>titulo</th>
            <th>opcao 2</th>
            <th>opcao 3</th>
            <th>opcao 4</th>
            <th>status</th>
            <th></th>
            <th></th>
          <tr>
        @foreach($questoes as $questao)
          <tr>
            <td>{{$questao->categoria->titulo}}</td>
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