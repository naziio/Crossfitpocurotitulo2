@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('partials/success')
            <div class="panel panel-custom-horrible-red">
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


