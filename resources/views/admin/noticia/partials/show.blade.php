<h2>Noticias</h2>
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

    </tr>
    @endforeach
</table>


@if (Auth::check())
<h2>WOD Diario</h2>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha</th>
    </tr>

    @foreach( $comparar as $comparars)
    <tr>
        <th>{{$comparars->id}}</th>
        <th>{{$comparars->nombre}}</th>
        <th>{{$comparars->descripcion}}</th>
        <th>{{$comparars->fecha}}</th>

    </tr>
    @endforeach
</table>
@endif