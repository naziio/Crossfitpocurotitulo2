@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Registro de pagos </div>

                <div class="panel-body">
                    @if (Auth::user()->role =='admin')
                    <a class="btn btn-info" href="{{route('admin.pago.create')}}" role="button">Nuevo pago</a>
                    <br/>
                    @endif
                    <p>Hay {{ $pago->total() }} pago'(s) </p>

                    @include('admin.pago.partials.tables')



                </div>
                {{ $pago->render()}}
            </div>
        </div>
    </div>
</div>
@endsection