<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    @foreach( $noticia as $noticias)

    <tr>
        <th>{{$noticias->id}}</th>
        <th>{{$noticias->name}}</th>
        <th>{{$noticias->descripcion}}</th>
        <th>{{$noticias->fecha}}</th>
        <th><a href="{{ route('admin.noticia.edit', $noticias) }}">Editar</a> <a href="">Eliminar</a></th>

    </tr>
    @endforeach
</table>