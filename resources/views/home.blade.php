@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @include('admin.noticia.index2');
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
