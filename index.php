<!-- Cambios de Nehemías 
*Centrar LOGIN
*Agregar link nulo a un Sing up
*Agregar link nulo de Forgot Password
*Hacer responsive 
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Css index.css-->
  <link rel="stylesheet"  href="Css/index.css">
  <!--Fuente montserrat-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<!-- Instanciando bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>LOGIN CON SESIONES</title>
    <style type="text/css">
      /*
            * Animaciones
            */

            @-webkit-keyframes square {
                0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-100%) rotate(600deg);
                transform: translateY(-100%) rotate(600deg);
            }
            }
            @-moz-keyframes square {
                0% {
                -moz-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -moz-transform: translateY(-100%) rotate(600deg);
                transform: translateY(-100%) rotate(600deg);
            }
            }
            @keyframes square {
                0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-1500px) rotate(600deg);
                transform: translateY(-1500px) rotate(600deg);
            }
            }
    </style>
</head>
<body class="body">
  <!--div con clase contenedor que se adapte a el tamaño de una pantalla-->
    <div class="container">
  <section class="example2">
            <ul class="cuadrados">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>


       <center> 
         <!--imagen inube-->
      <img src="Images/nube.png" class="nube">
      <h1 class="login">Ingresa</h1><br>
       <br>
       <br>
       <br>
<!--Hacer que el formulario agarre datos de loguear.php-->
       <form action="conexion/loguear.php" method="POST">
        <input type="text" name="usuario" placeholder="Digite su usuario" class="usuario">
         <br><br>
         <input type="password" name="clave" placeholder="digite clave" class="password">
         <br><br>
         <button type="submit" class="enter"> ENTRAR</button>
		 <br>
        </form>
		<br>
<!-- link a página de Sing up -->
		 <a href="views/signupUsers.html">Sign up</a><br>
<!-- Link a Forgot Password-->
		 <a href="views/recoverPass.php">¿Olvidaste tu contraseña?</a>
        </center>
</body>
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		

</html>