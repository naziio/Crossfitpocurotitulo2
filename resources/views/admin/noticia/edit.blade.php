@extends('layouts.app')

@if(Session::has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{{Session::get('message')}}</strong>
</div>
@endif
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Actualizar Noticia </div>
                <div class="panel-body">
                    @include('admin.partials.errors')
                    {!! Form::model($noticia, ['route'=>['admin.noticia.update',$noticia], 'method'=>'PUT'])!!}
                    @include('admin.noticia.partials.fields')
                    <button type="submit" class="btn btn-default">Actualizar</button>
                    {!!Form::close() !!}
                </div>
                @include('admin.noticia.partials.delete')
            </div>
        </div>
    </div>
</div>
@endsection

