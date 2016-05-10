@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Editar Biografia {{$user->name}} </div>
                <div class="panel-body">
                    @if($bios)
                    <p>Ya registro su biografia, si desea editarla click <a href="{{route('bio.edit',$bios)}}">aqui</a></p>
                    @else
                    {!! Form::open(['route'=>'bio.store', 'method'=>'POST','files' =>'true'])!!}
                    @include('admin.users.bio.partials.fields');
                    <button type="submit" class="btn btn-default">Crear</button>
                    {!!Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection

