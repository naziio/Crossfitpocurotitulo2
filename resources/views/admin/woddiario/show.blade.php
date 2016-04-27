//mostrar el wod del dia
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">WOD del dia</div>

                <div class="panel-body">

                    <br/>
                    <p>Hay {{$woddiario->total()}} wod (s) </p>
                    @include('admin.woddiario.partials.show')

                    {!! $woddiario->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection