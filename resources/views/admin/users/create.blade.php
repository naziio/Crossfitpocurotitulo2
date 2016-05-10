@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Registro de usuario nuevo</div>
                <div class="panel-body">
                    <!--                    @include('admin.partials.errors')-->
                    {!! Form::open(['route'=>'admin.users.store', 'method'=>'POST'])!!}
                    @include('admin.users.partials.fields')
                    <button type="submit" class="btn btn-default">Crear</button>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection