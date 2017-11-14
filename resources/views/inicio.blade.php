<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto Diseño</title>

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

    <link href="css/estilosinicio.css" rel="stylesheet">


</head>

<body >

<!-- Navigation -->
<ul class="menu">
    <li><a href="#">Inicio</a></li>
    <li><a href="tienda">Tienda</a></li>

</ul>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="cuadro">
                <h1 class="text-uppercase">
                    <p>Fabrica Nº1 en</p>
                    <p> piezas de competición</p>
                    <img src="images/logo.png">
                </h1>
            </div>
        </div>
    </div>
</header>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Apariciones</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p>Nuestras piezas tienen varias apariciones en los campeonatos mundiales.Por ejemplo aqui un video de un M3 E30 DTM</p>
        </div>

        <iframe class="video" width="420" height="315"
                src="https://www.youtube.com/embed/-RBF0qHRsXw?autoload=1">
        </iframe>

    </div>
    <hr class="my-4">
</section>


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
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="email" id="emailtexto" class="full text-center" placeholder="Email ">

                                <button class=" bg-gray" onclick="borrar()"type="submit"><i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>

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

<script type="text/javascript">

    function borrar(){
        var emailtexto = document.getElementById("emailtexto");
        emailtexto.value="";
        alert("Enviado");

        bootbox.alert("This is the default alert!");

    }
</script>

</html>