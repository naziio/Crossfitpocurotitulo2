@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('partials/success')
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Evaluacion  </div>
                <div class="panel-body">
                    <h1></h1>

                    @include('evaluacion.partials.completa')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

