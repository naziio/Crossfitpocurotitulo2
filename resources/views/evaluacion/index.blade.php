@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Evaluacion</div>
                <div class="panel-body">
                    @if($user->role=='admin')<a class="btn btn-info" href="{{ url('evaluacion/habilitar/edit') }}">Habilitar/Desabilitar evaluacion</a>@endif

                    @if($estado->estado==1)<a class="btn btn-info" href="{{route('evaluacion.create')}}" role="button">Empezar la evaluacion</a>
@endif
                    <br/>

                    <h3>¿En que consiste?</h3>
                    <br/>
                    <pre><p>La evaluacion consiste en determinar el estado fisico actual de si mismo, para luego ver con el tiempo las mejoras
                            y verificar si el entrenamiento es efectivo. Por lo mismo se realizan <strong>3 evaluaciones </strong>en el año</p></pre>
                    <br/>
                   <a href="">Ver mis evaluaciones realizadas</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection