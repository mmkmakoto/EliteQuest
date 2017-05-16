<table class="table">
    <tr>
        <th>categoria</th>
        <th>título</th>
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
            <td><a href='/questoes/delete/{{$questao->id}}'>Delete</a></td>
            <td><a href='/questoes/edit/{{$questao->id}}'>Edit</a></td>
        <tr>
    @endforeach
</table>