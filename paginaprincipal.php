<?php
        session_start();
    //     $sesion = $_SESSION['username'];
    //     if(!isset($sesion)){
    //      header("location: index.php");

    //     }else{
    //     echo "<h1> BIENVENIDO $sesion </h1><br>";
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link href="fonts/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nube</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>

<body>

    <!-- Este es el contenedor que tiene nuesto navbar y sidebar-->
    <div class="wrapper">
        <!--Aqui empiesa la barra lateral -->
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
    <!--
        Tip 1: Puedes cambiar el color de la barra lateral usando: data-color="purple | blue | green | orange | red"
        Tip 2: También puedes agregar una imagen usando la etiqueta data-image.
    -->
            <!--Creamos otro contenedor donde empezaremos a trabajar con el sidebar-->
            <div class="sidebar-wrapper">
                <!--La clase logo nos crea el encabezado del sidebar donde podemos agregar un logo, texto-->
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                      Mi Nube
                    </a>
                </div>
                <!--Con la clase nav creamos un menu de navegacion usando el elemento ul y li que son para listas-->
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="paginaprincipal.php">
                            <!--Agregamos un icono para buscar un icono es es pecifico https://useiconic.com/open/ lo busca y solo se reemplaza su nombre-->
                            <i class="oi oi-folder"></i>
                            <p>Carpeta o DD</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="paginaprincipal.php">
                            <!-- <i class="nc-icon nc-bell-55"></i> -->
                            <i class="oi oi-folder"></i>
                            <p>Carpeta o DD</p>
                        </a>
                    </li>

                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="javascript:verusuarios();">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Administrar usuarios </p>
                        </a>
                    </li>
                </ul><!--Fin menu de navegacion-->
            </div>
        </div><!--Fin barra lateral-->
        <!--Empieza el panel principal-->
        <div class="main-panel">
            <!-- Navbar inicia-->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">Template</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <!--Parte izquierda del navbar-->
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="no-icon">Nuevo</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Nueva carpeta </a>
                                    <a class="dropdown-item" href="#">Subir archivo</a>
                                    <a class="dropdown-item" href="#">Subir carpeta</a>
                                </ul>
                            </li>
                        </ul>
                        <!--Parte derecha del navbar-->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="conexion/salir.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--Contenedor de vistas multiples en done se muestrara lo que seleccionemos en el sidebar-->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                </div>
            </div>
            <!--Fin del contenedor de vistas multiples-->
            
        </div>
    </div><!--Fin de el contenedor global-->
   
</body>
<!--pintamos en el contenedor seleccionado-->
<script>
    function verusuarios() {
  $(document).ready(function () {
      $('.section').load("admin/views/tablasUsuarios.php");
    });
}
    
  </script>
<!--Todos estos script son muy utiles ayudan a que la pagina sea responsiva-->
<!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>

</html>