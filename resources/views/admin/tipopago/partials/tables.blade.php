<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tipo de pago</th>
        <th>Monto</th>

    </tr>
    @foreach( $pago as $pagos)

    <tr>
        <th>{{$tipopagos->id}}</th>
        <th>{{$tipopagos->type}}</th>
        <th>{{$tipopagos->monto}}</th>

        <th><a href="{{ route('admin.pago.edit', $pagos) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>