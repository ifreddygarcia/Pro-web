<!--Humberto-->
<!--Este archivo solo contiene las funciones de dar
de alta un usuario y crearle un directorio en el 
proyecto, no se visualiza-->
<?php
	//Referencia al archivo para crear conexión
	require '../conexion/conexion.php';
	//Referencia a crear registro en cloud
	require '../funciones/newCloudUser.php';
	//--------------------------------------------------------
	//Variables recibidas por POST
	$nameUser= $_POST["nameUser"];
	$lastNameUser= $_POST["lastNameUser"];
	$ageUser= $_POST["ageUser"];
	$mailUser= $_POST["mailUser"];
	$username= $_POST["username"];
	$passUser= $_POST["passUser"];
	//Prueba de que el username no se repita
	$buscarUsuario = "SELECT * FROM users
	WHERE user = '$username' OR mail = '$mailUser' ";

 	$result = $conectar->query($buscarUsuario);
 
 	$count = mysqli_num_rows($result);
 
 	if ($count == 1) {
		echo'<script type="text/javascript">
    			alert("El nombre de usuario o correo electronico ya existe");
    			window.location.href="../views/signupUsers.html";
    		</script>';
 	}else{
 		
	//Query que inserta a los usuarios nuevos
	$insertQuery = "INSERT INTO users(user,password,admin,name,last_name,age,mail) VALUES ('$username', '$passUser', 0, '$nameUser', '$lastNameUser', '$ageUser', '$mailUser')";
	
	//Validación de Sentencia creada correctamente
	if ($conectar->query($insertQuery) === TRUE) {
	    echo "Has sido registrado exitosamente!";
	    echo "<br>";
	    //Llamada a función para crear directorio
		createUserDir();
		//Crear sus espacio en la nube
		insertCloud($idUserCloud,$cloudRoute,$conectar);
	} else {
    echo "Error: " . $insertQuery . "<br>" . $conectar->error;
}
}
//para enviar un correo electronico a la persona que creo su cuenta
if (isset($_POST['enviar'])) {
	if (!empty($_POST['mailUser']) && !empty($_POST['username'])) {
		$asunto="Creacion de cuenta inube";
		$msg="Hola gracias por crear una inube";
		$header="From: noreply@example.com"."\r\n";
		$header.="Reply-To: noreply@example.com"."\r\n";
		$header."X-Mailer: PHP/".phpversion();
		$mail= @mail($mailUser,$asunto,$msg,$header);
		if($mail) {
			echo "<h4>Se ha enviado un mail a tu correo</h4>";
		}else{
			echo "<h4>No se pudo enviar el mail a tu correo</h4>";
		}
	}
}
?>