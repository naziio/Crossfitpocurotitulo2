@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Crear wod fijo</div>
                <div class="panel-body">
                    <!--                    @include('admin.partials.errors')-->
                    {!! Form::open(['route'=>'admin.subirwod.store', 'method'=>'POST'])!!}
                    @include('admin.subirwod.partials.fields')
                    <button type="submit" class="btn btn-default">Crear</button>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection