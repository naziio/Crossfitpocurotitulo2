@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Noticias</div>
                <div class="panel-body">
                    <a class="btn btn-info" href="{{route('admin.noticia.create')}}" role="button">Nueva noticia</a>
                    <br/>
                    <p>Hay {{$noticia->total()}} noticia(s) </p>
                    @include('admin.noticia.partials.tables')

                    {!! $noticia->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection