@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
           @include('partials/success')
          <div class="panel panel-default">
                <div class="panel-heading">Comparar Alumnos</div>
                <div class="panel-body">
                    <h1>Modulo 1</h1>
                    <p>Comparar usuarios</p>
                    @include('comparar.partials.show')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
