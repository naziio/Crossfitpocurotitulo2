<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre de usuario</th>
        <th>Tipo de pago</th>
        <th>Monto</th>
<!--        <th>Fecha pago</th>-->
        <th>Fecha expira</th>
    </tr>

    @foreach( $pago as $pagos)
    <tr>
        <th>{{$pagos->id}}</th>
        <th>{{$pagos->user->name}}</th>
        <th>{{$pagos->tipopago->type}}</th>
        <th>{{$pagos->tipopago->monto}}</th>
<!--        <th>{{$pagos->fechapago}}</th>-->
        <th>{{$pagos->fechaexpira}}</th>
        <th><a href="{{ route('admin.pago.edit', $pagos) }}">Editar</a> <a href="">Eliminar</a></th>
    </tr>
    @endforeach
</table>