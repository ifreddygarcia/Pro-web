<?php
	require '../conexion/conexion.php';

	$nameUser= $_POST["nameUser"];
	$lastNameUser= $_POST["lastNameUser"];
	$ageUser= $_POST["ageUser"];
	$mailUser= $_POST["mailUser"];
	$username= $_POST["username"];
	$passUser= $_POST["passUser"];

	$insertQuery = "INSERT INTO users 
								(user,
								password,
								admin,
								name,
								last_name,
								age,
								mail) VALUES ('$username', '$passUser', 0, '$nameUser', '$lastNameUser', '$ageUser', '$mailUser')";
	

	//$insert = mysqli_query($conectar, $insertQuery);
	//Validación del registro
	if ($conectar->query($insertQuery) === TRUE) {
	    echo "Has sido registrado exitosamente!";
	    //header("location: ../usuarios/signupUsers.html");
	} else {
    echo "Error: " . $insertQuery . "<br>" . $conectar->error;
}
?>