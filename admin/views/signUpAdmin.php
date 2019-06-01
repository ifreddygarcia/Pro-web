<!--Documento hecho por freddy y agustin-->
<!DOCTYPE html>
<html>
<head>
    <title>Registro admin</title>
    <meta charset="utf-8">
    <link type="text/css" href="./../css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<LINK REL=StyleSheet HREF="CSS/estilo.css" TYPE="text/css" MEDIA=screen>
</head>
 
<body>
    <div id="registrar">
            <a href="../index.php"</a>Regresar</a>
    </div>
    <div class="container"><center>
    	<div id="pie">Sistema de Registro de Admin</div>
    	<form id="form-login" action="#" method="post" >
    		 <p><label id="nombre">Nombre:</label></p>
             <input name="nombre" type="text"  placeholder="Pon tu nombre" / >
 		     <p><label id="apellidos">Apellidos:</label></p>
             <input name="apellidos" type="text" id="apellidos" class="apellidos" placeholder="Pon tus apellidos" />
 
             <p><label id="correo">Correo:</label></p>
             <input name="correo" type="text" id="correo" class="correo" placeholder="Pon tu mail" />
 
             <p><label id="pass">Password:</label></p>
             <input name="pass" type="password" id="pass" class="pass" placeholder="Pon tu contraseña"/ >
 
             <p><label id="repass">Repetir Password:</label></p>
              <input name="repass" type="password" id="repass" class="repass" placeholder="Repite contraseña" />
              <p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/>
             
        </form>
        </center>
    </div>

 <!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</body>
 
</html>