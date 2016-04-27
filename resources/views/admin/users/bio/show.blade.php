@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Biografia de  {{ $user->name }}</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{ route('bio.create') }}" role="button">Nuevo Usuario</a>
                    <br/>
                    @include('admin.users.bio.partials.tables');
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
