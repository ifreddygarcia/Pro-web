<!-- Cambios de Nehemías 
*Centrar LOGIN
*Agregar link nulo a un Sing up
*Agregar link nulo de Forgot Password
*Hacer responsive 
-->

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Instanciando bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN CON SESIONES</title>
</head>
<body>
<!--div con clase contenedor que se adapte a el tamanño de una pantalla-->
    <div class="container">

       <center> <h1>LOGIN</h1><br>
       <br>
       <br>
       <br>
<!--Hacer que el formulario agarre datos de loguear.php-->
       <form action="conexion/loguear.php" method="POST">
        <input type="text" name="usuario" placeholder="Digite su usuario">
         <br><br>
         <input type="password" name="clave" placeholder="digite clave">
         <br><br>
         <button type="submit" > ENTRAR</button>
		 <br>
        </form>
		<br>
<!-- link a página de Sing up -->
		 <a href="">Sing up</a><br>
<!-- Link a Forgot Password-->
		 <a href="">¿Olvidaste tu contraseña?</a>
        </center>
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
</body>
</html>