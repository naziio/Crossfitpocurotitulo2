<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    @foreach( $wod as $wods)

    <tr>
        <td>{{$wods->id}}</td>
        <td>{{$wods->nombre}}</td>
        <td>{{$wods->descripcion}}</td>
        <td>{{$wods->fecha}}</td>
        <td><a href="{{ route('admin.woddiario.edit', $wods) }}">Editar</a> <a href="">Eliminar</a></td>

    </tr>
    @endforeach
</table>