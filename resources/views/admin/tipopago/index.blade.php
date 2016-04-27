@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Wod </div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('admin.tipopago.create')}}" role="button">Nuevo pago</a>
                    <br/>
                    <p>Hay {{$tipopago->total()}} pago'(s) </p>
                    @include('admin.tipopago.partials.tables')

                    {!! $tipopago->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection