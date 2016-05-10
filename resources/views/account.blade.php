@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                    <div class="panel-heading">Mi cuenta</div>
                    <div class="panel-body">
                        @include('partials/success')
                        <ul>
                            <li><a href="{{ url('account/edit-profile') }}">Editar perfil</a></li>
                            <li><a href="{{ url('account/password') }}">Cambiar password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
