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
        <th>{{$wods->id}}</th>
        <th>{{$wods->nombre}}</th>
        <th>{{$wods->peso}}</th>
        <th>{{$wods->tiempo}}</th>
        <th>{{$wods->fecha}}</th>
        <th><a href="{{ route('wodfijo.edit', $wods) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>