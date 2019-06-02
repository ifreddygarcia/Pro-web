<!DOCTYPE html>
<html>
<head>
	<!-- Instanciando bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>
<div class="container">
<?php
	//Referencia al archivo para crear conexión
	require '../conexion/conexion.php';
	//Referencia al archivo para crear directorios
	require '../funciones/newDirectoryUser.php';
	//Variables recibidas por POST
	$nameUser= $_POST["nameUser"];
	$lastNameUser= $_POST["lastNameUser"];
	$ageUser= $_POST["ageUser"];
	$mailUser= $_POST["mailUser"];
	$username= $_POST["username"];
	$passUser= $_POST["passUser"];
	//Query qu inserta a los usuarios nuevos
	$insertQuery = "INSERT INTO users(user,password,admin,name,last_name,age,mail) VALUES ('$username', '$passUser', 0, '$nameUser', '$lastNameUser', '$ageUser', '$mailUser')";
	
	//Validación de Sentencia creada correctamente
	if ($conectar->query($insertQuery) === TRUE) {
	    echo "Has sido registrado exitosamente!";
	    echo "<br>";
	    //Llamada a función para crear directorio
		createUserDir();
	} else {
    echo "Error: " . $insertQuery . "<br>" . $conectar->error;
}
?>

</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
</body>
</html>