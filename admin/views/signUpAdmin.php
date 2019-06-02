<!--Documento hecho por freddy -->
<?php 
require '../../conexion/conexion.php';  

if (isset($_GET['valor'])) {
    $quien=$_GET['valor'];
}


?>



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
    </div>
    <div class="container"><center>
    	<div id="pie">Esta editando los datos del usuario </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Tipo de usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Edad</th>
                                            <th>Correo</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input id="usu" name="usuario" type="text" required=""></td>
                                                <td><input id="con" name="contraseña" type="text" required=""></td>
                                                <td><input id="tipo" name="tipo" type="text" required=""></td>
                                                <td><input id="nom" name="nombre" type="text"></td>
                                                <td><input id="ape" name="apellido" type="text"></td>
                                                <td><input id="eda" name="edad" type="text"></td>
                                                <td><input id="cor" name="correo" type="text"></td>

                                            </tr>
                                            <tr>
                                                
                                            </tr>
                                        </tbody>
                                        <?php echo ' <button id="boton4" type="submit" value="'.$quien.'" class="btn btn-primary" required > Actualiza</button>';   ?>
            </div>
              
              
        
        </center>
    </div>

     <script>
                                $(document).ready(function(){
                                    $("#boton4").click(function(){

                                        var variable = $("#boton4").val();
                                        var variable1 = $("#usu").val();
                                        var variable2 = $("#con").val();
                                        var variable3 = $("#tipo").val();
                                        var variable4 = $("#nom").val();
                                        var variable5 = $("#ape").val();
                                        var variable6 = $("#eda").val();
                                        var variable7 = $("#cor").val();

                                        $.get("admin/funciones/signUpAdmin.php", {valboton:variable, usuario:variable1, contra:variable2, tipo:variable3, nombre:variable4, apelli:variable5, edad:variable6, correo:variable7 }, function(datos){
                                            $("#resultado").html(datos);
                                        });

                                    });
                                });
</script>

 <!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
</body>
 
</html>

