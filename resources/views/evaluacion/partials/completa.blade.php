<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>pullup</th>
        <th>pushup</th>
        <th>abd</th>
        <th>salto</th>
        <th>sentadilla</th>
        <th>10k</th>
        <th>pressbanca</th>
        <th>clean</th>
        <th>snatch</th>
        <th>sentadillapeso</th>
        <th>sentadillafrontal</th>
        <th>Fecha</th>
    </tr>
    @foreach( $evaluacion as $evaluaciones)

    <tr>
        <td>{{$evaluaciones->id}}</td>
        <td>{{$evaluaciones->pullup}}</td>
        <td>{{$evaluaciones->pushup}}</td>
        <td>{{$evaluaciones->abd}}</td>
        <td>{{$evaluaciones->salto}}</td>
        <td> </td>
        <td>{{$evaluaciones->sentadilla}}</td>
        <td>{{$evaluaciones->pressbanca}} kg</td>
        <td>{{$evaluaciones->clean}} kg</td>
        <td>{{$evaluaciones->snatch}} kg</td>
        <td>{{$evaluaciones->sentadillapeso}} kg</td>
        <td>{{$evaluaciones->sentadillafrontal}} kg</td>
        <td>{{$evaluaciones->created_at}}</td>

    </tr>
    @endforeach
</table>