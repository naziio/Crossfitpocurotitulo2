@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear WOD </div>
                <div class="panel-body">
                    @include('admin.partials.errors')
                    {!! Form::open(['route'=>'wodfijo.store', 'method'=>'POST'])!!}
                    @include('admin.wodfijo.partials.fields')
                    <button type="submit" class="btn btn-default">Crear</button>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection