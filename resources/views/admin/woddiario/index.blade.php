@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Wod </div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('admin.woddiario.create')}}" role="button">Nueva WOD</a>
                    <br/>
                    <p>Hay {{$wod->total()}} wod'(s) </p>
                    @include('admin.woddiario.partials.tables')

                    {!! $wod->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection