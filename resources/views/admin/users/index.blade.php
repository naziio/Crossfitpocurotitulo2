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
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{ route('admin.users.create') }}" role="button">Nuevo Usuario</a>
                    <br/>
                    <p>Hay {{$users->total()}} Registros</p>
                    @include('admin.users.partials.tables')

                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection