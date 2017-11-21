<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/nismo-2.png" /> <title>NISMO</title>


    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- BootBox -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" rel-->
    <script src="node_modules/bootbox/bootbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="css/estilosinicio.css" rel="stylesheet">



</head>

<body >

<!-- Navigation -->

<nav class="navbar-inverse" >
    <div class="container-fluid" id="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio" id="titulo">NISMO</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="tienda" id="menus">Tienda</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="login" id="menus"><span class="glyphicon glyphicon-user color"></span> Iniciar sesión</a></li>
                    <li><a href="register" id="menus"><span class="glyphicon glyphicon-log-in color"></span> Registro</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Copyright</h3>
                    <ul>
                        <li>Política de Privacidad</li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Galería</h3>
                    <ul>
                        <li>Fotos<br/>Videos<br/>Trofeos</li>


                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Direccion</h3>
                    <ul>
                        <li>6-1 Ciudad de Oguro Tsurumi-ku, Yokohama-shi, Prefectura de Kanagawa 230 - 005</li>

                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Distribuidores</h3>
                    <ul>
                        <li>Europa<br/>Asia<br/>America<br/>Africa</li>

                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3>Subscribete</h3>


                    </br>
                    <ul class="social">
                        <li> <a href="https://es-es.facebook.com/"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="https://twitter.com/?lang=es"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="https://plus.google.com/discover?hl=es"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="https://www.pinterest.es/"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="https://www.youtube.com/"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>

                </div>

            </div>
        </div>

    </div>

</footer>




</body>
</html>
