<?php
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];



$query = "SELECT COUNT(*) as contar FROM users where user = '$user' and password = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);

if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: ../paginaprincipal.php");
}else {
   echo'<script type="text/javascript">
    			alert("El nombre de usuario o correo electronico están incorrectos");
    			window.location.href="../index.php";
    		</script>';
}


?>