@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('partials/success')
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Mis evaluaciones</div>
                <div class="panel-body">
                    <h1>Listado</h1>

                    @include('evaluacion.partials.ev')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection