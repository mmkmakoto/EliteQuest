<table class="table">
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th></th>
        <th></th>
    <tr>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->titulo}}</td>
            <td>{{$categoria->descricao}}</td>
            <td><a href='/categorias/delete/{{$categoria->id}}'>Delete</a></td>
            <td><a href='/categorias/edit/{{$categoria->id}}'>Edit</a></td>
        <tr>
    @endforeach
</table>