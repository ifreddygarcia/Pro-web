<!--Humberto-->
<!--Este archivo solo contiene las funciones de dar
de alta un usuario y crearle un directorio en el 
proyecto, no se visualiza-->
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