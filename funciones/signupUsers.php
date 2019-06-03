<!--Humberto-->
<!--Este archivo solo contiene las funciones de dar
de alta un usuario y crearle un directorio en el 
proyecto, no se visualiza-->
<?php
session_start();

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
	    $nombre=mysqli_query($conectar,"SELECT *FROM users where id_user >= 1");
        while ($nom= mysqli_fetch_array($nombre)){
            
            if ($nom['user']== $username) {
                $su=$nom['id_user'];
                $su2=$nom['user'];
                $dirUsers2 = 'data/users/';
                $nsu=$dirUsers2.$su2;

            }
        }
	    //Llamada a función para crear directorio
		createUserDir();
		//Crear sus espacio en la nube
		insertCloud($su,$nsu,$conectar);
	} else {
    echo "Error: " . $insertQuery . "<br>" . $conectar->error;
}
}
$consult=mysqli_query($conectar,"SELECT *FROM cloud where id_user_user= $su");
        while ($ra= mysqli_fetch_array($consult)){
            
                $nos=$ra['id_cloud'];

 }mysqli_query($conectar,"INSERT INTO directories (id_cloud_cloud,route_file) values ('$nos', '/files/'),('$nos', '/videos/'),('$nos', '/photos/'),('$nos', '/music/')");
 //Valor que nos dirige a Pagina principal
$query = "SELECT COUNT(*) as contar FROM users where user = '$username' and password = '$passUser' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);

if($parametros['contar']>0){
   $_SESSION['username'] = $username;
  header("location: ../paginaprincipal.php");
}

else {
   
    echo "<a href='../error404.php'>Volver</a>";
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