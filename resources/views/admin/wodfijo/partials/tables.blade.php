<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Peso</th>
        <th>Tiempo</th>
        <th>Fecha</th>
    </tr>
    @foreach( $wod as $wods)

    <tr>
        <td>{{$wods->id}}</td>
        <td>{{$wods->nombre}}</td>
        <td>{{$wods->peso}}</td>
        <td>{{$wods->tiempo}}</td>
        <td>{{$wods->fecha}}</td>
        <td><a href="{{ route('wodfijo.edit', $wods) }}">Editar</a> <a href="">Eliminar</a></td>

    </tr>
    @endforeach
</table>