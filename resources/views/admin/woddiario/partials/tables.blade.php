<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    @foreach( $wod as $wods)

    <tr>
        <th>{{$wods->id}}</th>
        <th>{{$wods->nombre}}</th>
        <th>{{$wods->descripcion}}</th>
        <th>{{$wods->fecha}}</th>
        <th><a href="{{ route('admin.woddiario.edit', $wods) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>