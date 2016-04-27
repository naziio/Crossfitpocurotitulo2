@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">W.O.D </div>
                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('wodfijo.create')}}" role="button">Nuevo WOD</a>
                    <br/>
                    <p>Hay {{$wod->total()}} wod'(s) </p>
                    @include('admin.wodfijo.partials.tables')

                    {!! $wod->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection