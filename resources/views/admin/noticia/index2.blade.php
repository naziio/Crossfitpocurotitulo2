@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Noticias</div>

                <div class="panel-body">

                    <br/>
                    <p>Hay {{$noticia->total()}} noticia(s) </p>
                    @include('admin.noticia.partials.show')

                    {!! $noticia->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection