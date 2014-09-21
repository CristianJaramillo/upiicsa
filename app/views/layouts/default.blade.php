<!DOCTYPE html>
<html lang="@yield('lang', 'es')">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sociedad, Tecnología y Deontología')</title>

    <!-- Icon home -->
    <link rel="icon" href="{{ asset('upiicsa.jpg') }}"/>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style this templet -->
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/main.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <header class="bg-primary bg-black">
      <div class="container">
        <div class="row">
          <div class="col-sx-12 col-sm-9 col-lg-8">
            <h1 class="title">Sociedad, Tecnología y Deontología</h1>
          </div>
          <div class="col-sx-12 col-sm-3 col-lg-4">
            <div class="social-buttons">
              <a href="#"><span alt="facebook" class="ease facebook"></span></a>
              <a href="#"><span alt="google" class="ease google"></span></a>
              <a href="#"><span alt="twitter" class="ease twitter"></span></a>
              <a href="#"><span alt="youtube" class="ease youtube"></span></a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>  
          </button>
          <a href="{{ route('home') }}" class="navbar-brand">Inicio</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="ease" href="{{ route('sing-up') }}">Registro</a></li>
            <li class="ease dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Carreras<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="ease" href="{{ route('category', [\Str::slug('Lic. Administración Industrial'), 1]) }}">Administración Industrial</a></li>
                <li><a class="ease" href="{{ route('category', [\Str::slug('Lic. en Ciencias de la Informática'), 2]) }}">Ciencias de la Informática</a></li>
                <li><a class="ease" href="{{ route('category', [\Str::slug('Lic. en Ingeniería en Industrial'), 3]) }}">Ingeniería en Industrial</a></li>
                <li><a class="ease" href="{{ route('category', [\Str::slug('Lic. en Ingeniería en Informática'), 4]) }}">Ingeniería en Informática</a></li>
                <li><a class="ease" href="{{ route('category', [\Str::slug('Lic. en Ingeniería en Transportes'), 5]) }}">Ingeniería en Transportes</a></li>
                <li><a class="ease" href="{{ route('users') }}">Todos</a></li>
              </ul>
            </li>
            <li class="ease dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Equipos<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="ease" href="{{ route('team', [1]) }}">
                    Equipo 1
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [2]) }}">
                    Equipo 2
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [3]) }}">
                    Equipo 3
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [4]) }}">
                    Equipo 4
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [5]) }}">
                    Equipo 5
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [6]) }}">
                    Equipo 6
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [7]) }}">
                    Equipo 7
                  </a>
                </li>
                <li>
                  <a class="ease" href="{{ route('team', [8]) }}">
                    Equipo 8
                  </a>
                </li>
              </ul>
            </li>
            <li><a class="ease" href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br/>

    <div class="container-main">
      @yield('app')
    </div>

    <br/>

    <footer class="bg-primary bg-black">
        <div class="container">
          <br>
            <p align="center">Derechos reservados <a href="#">@CristianJaramillo</a></p>
          </br>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>


