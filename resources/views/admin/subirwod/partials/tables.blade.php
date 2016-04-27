<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>

    </tr>
    @foreach( $subirwod as $wods)

    <tr>
        <th>{{$wods->id}}</th>
        <th>{{$wods->nombre}}</th>
        <th>{{$wods->descripcion}}</th>

        <th><a href="{{ route('admin.subirwod.edit', $wods) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>