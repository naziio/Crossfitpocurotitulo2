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
            <div class="panel panel-default">
                <div class="panel-heading">Habilitar/Deshabilitar evaluacion </div>
                <div class="panel-body">
                    @include('admin.partials.errors')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('evaluacion/habilitar/edit') }}">

                        {!! method_field('PUT') !!}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="estado" value="{{ old('estado', $habilitar->estado) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
