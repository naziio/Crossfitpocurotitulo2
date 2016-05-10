<table class="table table-bordered">
    <thead></thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $noticia as $noticias)

    <tr>
        <td>{{$noticias->id}}</td>
        <td>{{$noticias->name}}</td>
        <td>{{$noticias->descripcion}}</td>
        <td>{{$noticias->fecha}}</td>
        <td><a href="{{ route('admin.noticia.edit', $noticias) }}">Editar</a> <a href="">Eliminar</a></td>

    </tr>
    @endforeach
    </tbody>
</table>