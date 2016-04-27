<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Peso</th>
        <th>Estatura</th>
        <th>Biografia</th>
    </tr>
    @foreach( $bios as $bio)

    <tr>
        <th>{{$bio->id}}</th>
        <th>{{$bio->peso}}</th>
        <th>{{$bio->estatura}}</th>
        <th>{{$bio->biografia}}</th>
        <th> <img src="fotos/{{$bio->path}}" style="width:200px" alt=""/> </th>
        <th><a href="{{ route('bio.edit', $bio) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>