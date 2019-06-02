<!DOCTYPE html>
<html>
<head>
	<!-- Instanciando bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Actualización de Usuarios</title>
</head>
<body>
<div class="container">

<?php
	session_start();
	//Inicio de sesión
	require '../conexion/conexion.php';

	//Usuario actual
	$userSession = $_SESSION['username'];
	//------Query Select
	$selectQuery = "SELECT * FROM users WHERE user = '$userSession'";
	$selectUser = mysqli_query($conectar,$selectQuery);

	//Query Update
	
	//Función para extraer datos de un usuario activo, recibe como parámetro el query Select
	function extractData($selectUser){
		//Arreglo donde se almacenaran los datos del usuario
		$datos =array();
		//Ciclo If que busca en la tabla users y valida si existe o no
		if (mysqli_num_rows($selectUser) > 0) {
			//Ciclo While que almacena en un array asociativo los valores del usuario activo para
			//posteriormente poder recorrer solo ese usuario
			while($row = mysqli_fetch_assoc($selectUser)){
        		$datos[] = $row;
    		}
    		//Foreach que recorre el arreglo donde estan los datos de la tabla del usuario activo
    		foreach ($datos as $dato) {
    			$_SESSION['nombreUser'] = $dato['name'];
    			$_SESSION['apellidoUser'] = $dato['last_name'];
    			$_SESSION['edadUser'] = $dato['age'];
    			$_SESSION['correoUser'] = $dato['mail'];
    			$_SESSION['usuarioUser'] = $dato['user'];
    			$_SESSION['passUser'] = $dato['password'];
    		}
		}else {
	    	echo "No se encontraron resultados! :( ";
	    	}
	};

	if (isset($_POST['nameUser'])) {
		$nameUser= $_POST['nameUser'];
		$updateQuery = "UPDATE users SET name = '$nameUser' WHERE user = '$userSession' ";
		$updateUser= mysqli_query($conectar,$updateQery);
		//Bloque If que valida si se completó la sentencia y redirecciona al formulario
		if ($updateUser === TRUE) {
			header("location: ../views/updateUsers.php");
		}else{
			//Aquí debería redirigir a la página de error pero no se porque no lo hace xd
		}
	}
	if(isset($_POST['lastNameUser'])) {
		$lastNameUser= $_POST['lastNameUser'];
		$updateQuery = "UPDATE users SET last_name = '$lastNameUser' WHERE user = '$userSession' ";
		$updateUser= mysqli_query($conectar,$updateQuery);
		///Bloque If que valida si se completó la sentencia y redirecciona al formulario
		if ($updateUser === TRUE) {
			header("location: ../views/updateUsers.php");
		}else{
			//Aquí debería redirigir a la página de error pero no se porque no lo hace xd
		}
	}
	if(isset($_POST['ageUser'])) {
		$ageUser= $_POST['ageUser'];
		$updateQuery = "UPDATE users SET age = '$ageUser' WHERE user = '$userSession' ";
		$updateUser= mysqli_query($conectar,$updateQuery);
		//Bloque If que valida si se completó la sentencia y redirecciona al formulario
		if ($updateUser === TRUE) {
			header("location: ../views/updateUsers.php");
		}else{
			//Aquí debería redirigir a la página de error pero no se porque no lo hace xd
		}
	}
	if(isset($_POST['mailUser'])) {
		$mailUser= $_POST['mailUser'];
		$updateQuery = "UPDATE users SET mail = '$mailUser' WHERE user = '$userSession' ";
		$updateUser= mysqli_query($conectar,$updateQuery);
		//Bloque If que valida si se completó la sentencia y redirecciona al formulario
		if ($updateUser === TRUE) {
			header("location: ../views/updateUsers.php");
		}else{
			//Aquí debería redirigir a la página de error pero no se porque no lo hace xd
		}
	}
	if(isset($_POST['passUser'])) {
		$passUser= $_POST['passUser'];
		$updateQuery = "UPDATE users SET password = '$passUser' WHERE user = '$userSession' ";
		$updateUser= mysqli_query($conectar,$updateQuery);
		//Bloque If que valida si se completó la sentencia y redirecciona al formulario
		if ($updateUser === TRUE) {
			header("location: ../views/updateUsers.php");
		}else{
			//Aquí debería redirigir a la página de error pero no se porque no lo hace xd
		}
	}
	
	
	
 
?>
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
</body>
</html>