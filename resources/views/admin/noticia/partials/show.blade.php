<h2>Noticias</h2>
<table class="table table-condensed">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    </thead>
    @foreach( $noticia as $noticias)

    <tr>
        <td>{{$noticias->id}}</td>
        <td>{{$noticias->name}}</td>
        <td>{{$noticias->descripcion}}</td>
        <td>{{$noticias->fecha}}</td>

    </tr>
    @endforeach
</table>


@if (Auth::check())
<h2>WOD Diario</h2>
<table class="table table-condensed">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>
    </thead>
    @foreach( $comparar as $comparars)
    <tr>
        <td>{{$comparars->id}}</td>
        <td>{{$comparars->nombre}}</td>
        <td>{{$comparars->descripcion}}</td>
        <td>{{$comparars->fecha}}</td>

    </tr>
    @endforeach
</table>
@endif