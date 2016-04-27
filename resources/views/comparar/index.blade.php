@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials/success')
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido!</div>
                <div class="panel-body">
                    <h1>CrossFit</h1>
                    <p>Comparar usuarios</p>
                    {!! Form::open(['route'=>'comparar.store', 'method'=>'POST'])!!}
                    @include('comparar.partials.fields')
                    <button type="submit" class="btn btn-default">Comparar</button>
                    {!!Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


