<!-- Cambios de Nehemías 
*Centrar LOGIN
*Agregar link nulo a un Sing up
*Agregar link nulo de Forgot Password
*Hacer responsive 
*Diseño
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
            * Compatibilidad de animaciones y posición cambiante
            */

            @-webkit-keyframes square {
              /*Le aplicacamos un efecto de translado con la propiedad 
              -webkit-transform 
              y la propiedad "translate" hace que se mueva
              la "Y" quiere decir que lo hará en posición vertical desde el punto 
              0 en Y, que sería desde abajo
              empieza en 0% porque es su progreso*/
                0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            /*al final de su progreso en el 100% llegará a la posición -100 de Y
            y se agrega también la propiedad de rotación de 600 grados*/
            100% {
                -webkit-transform: translateY(-100%) rotate(600deg);
                transform: translateY(-100%) rotate(600deg);
            }
            }
           /*Este anima otros cuantos cuadrados*/
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
           /*los links del fondo*/
.colort{
    /*Solo que tengan color negro*/
    color: black;
}
    </style>
</head>
<body class="body">
  <!--div con clase contenedor que se adapte a el tamaño de una pantalla-->
    <div class="container">
      <!-- El contenedor que tendrá las propiedades de animación-->
  <section class="example2">
    <!--Contenedor de los cuadrados-->
            <ul class="cuadrados">
              <!--los cuadrados-->
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
         <input type="password" name="clave" placeholder="Digite clave" class="password" maxlength="8">
         <br><br>
         <button type="submit" class="enter"> ENTRAR</button>
		 <br>
        </form>
		<br>
<!-- link a página de Sing up -->
		 <a href="views/signupUsers.html" class="colort">Sign up</a><br>
<!-- Link a Forgot Password-->
		 <a href="views/recoverPass.php" class="colort">¿Olvidaste tu contraseña?</a>
        </center>
</body>
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		

</html>