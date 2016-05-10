<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Fecha</th>
    </tr>
    @foreach( $evaluacion as $evaluaciones)

    <tr>
        <td>{{$evaluaciones->id}}</td>
        <td>{{$evaluaciones->created_at}}</td>
        <td><a href="{{ route('evaluacion.completa', $evaluaciones->id) }}">Ver evaluacion completa</a></td>
    </tr>
    @endforeach
</table>




