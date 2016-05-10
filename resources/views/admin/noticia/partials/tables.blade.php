<div class="table-responsive">
    <table class="table table-condensed">
        <thead>
    <tr>

        <th>Nombre</th>
        <th>Descripcion</th>

    </tr>
        </thead>
        <tbody>
    @foreach( $noticia as $noticias)

    <tr>

        <td>{{$noticias->name}}</td>
        <td>{{$noticias->descripcion}}</td>

        <td><a href="{{ route('admin.noticia.edit', $noticias) }}">Editar</a> <a href="">Eliminar</a></td>

    </tr>
    @endforeach
        </tbody>
</table>
    </div>
