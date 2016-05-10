@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Wod </div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('admin.subirwod.create')}}" role="button">Nueva WOD</a>
                    <br/>
                    <p>Hay {{$subirwod->total()}} wod'(s) </p>
                    @include('admin.subirwod.partials.tables')

                    {!! $subirwod->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection