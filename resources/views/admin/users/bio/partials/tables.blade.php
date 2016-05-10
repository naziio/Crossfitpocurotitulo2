<div class="table-responsive">
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Peso</th>
        <th>Estatura</th>
        <th>Biografia</th>
    </tr>
    @foreach( $bios as $bio)

    <tr>
        <td>{{$bio->id}}</td>
        <td>{{$bio->peso}}</td>
        <td>{{$bio->estatura}}</td>
        <td>{{$bio->biografia}}</td>
        <td> <img src="fotos/{{$bio->path}}" style="width:200px" alt=""/> </td>
        <td><a href="{{ route('bio.edit', $bio) }}">Editar</a> <a href="">Eliminar</a></td>

    </tr>
    @endforeach
</table>
</div>