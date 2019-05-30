<?php
	require '../conexion/conexion.php';
	session_start();

	//$updateQuery = "UPDATE users SET $columna = '$newValue' WHERE id='$idUserSesion';";

	//echo $_SESSION['username'];
	$consulta = "SELECT * FROM users where user = '$_SESSION[username]'";

	//echo mysqli_query($conectar, $consulta);

	$row = $consulta->fetch_array(MYSQL_BOTH);

?>