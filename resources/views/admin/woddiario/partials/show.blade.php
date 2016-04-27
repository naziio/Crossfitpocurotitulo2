<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    @foreach( $woddiario as $wods)

    <tr>
    <th>{{$wods->id}}</th>
    <th>{{$wods->nombre}}</th>
    <th>{{$wods->descripcion}}</th>
    <th>{{$wods->fecha}}</th>

    </tr>
    @endforeach
</table>