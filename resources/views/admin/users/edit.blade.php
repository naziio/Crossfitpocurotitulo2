@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Actualizar usuario {{ $user->name }}</div>
                <div class="panel-body">
                    <!--                    @include('admin.partials.errors')-->
                    {!! Form::model($user, ['route'=>['admin.users.update',$user], 'method'=>'PUT'])!!}
                    @include('admin.users.partials.fields')
                    <button type="submit" class="btn btn-default">Actualizar</button>
                    {!!Form::close() !!}
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
</div>
@endsection