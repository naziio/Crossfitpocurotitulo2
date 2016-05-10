<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CrossFit</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{Html::style ('css/estilos.css')}}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: "Lato", Helvetica, Arial, sans-serif;
            font-size: 13px;
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" class="fondo">
<nav class="navbar navbar-inverse navbar-static-top">

        <div class="container">
                <!-- Collapsed Hamburger -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>CrossFit</b>Pocuro</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        @if (Auth::check())
                       <li><a href="{{ url('account') }}"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Mi cuenta</a></li>
                        <li><a href="{{ route('wodfijo.index') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> wods</a></li>
                        @if(Auth::user()->role=='admin') <li><a href="{{ route('admin.noticia.index') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Noticias</a></li>@endif
                        <li><a href="{{ route('evaluacion.index') }}"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Evaluacion</a></li>
                        @if(Auth::user()->role=='admin') <li><a href="{{ route('admin.pago.index') }}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Pagos</a></li> @endif
                        @if(Auth::user()->role=='admin') <li><a href="{{ route('admin.woddiario.index') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> wod diario</a></li> @endif
                        <li><a href="{{ route('comparar.index') }}"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> Comparar avances</a></li>
                        @endif

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                                <li><a href="{{ route('bio.index') }}">Mi biografia</a></li>
                                @if(Auth::user()->role=='admin') <li><a href="{{ route('admin.subirwod.create') }}"> WodFijo</a></li>@endif
                                @if(Auth::user()->role=='admin') <li><a href="{{ url('admin/users') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Usuarios</a></li> @endif
                                @if(Auth::user()->role=='admin')  <li><a href="{{ route('admin.pago.index') }}"> ver Pagos</a></li>@endif

                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>

        </div>


</nav>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
