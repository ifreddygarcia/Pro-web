<?php 
require '../../conexion/conexion.php';  


$v1=$_GET['valboton'];
$v2=$_GET['usuario'];
$v3=$_GET['contra'];
$v4=$_GET['tipo'];
$v5=$_GET['nombre'];
$v6=$_GET['apelli'];
$v7=$_GET['edad'];
$v8=$_GET['correo'];


if (isset($_GET['valboton'])) {

        mysqli_query($conectar,"UPDATE users SET user='$v2', password='$v3', admin='$v4', name='$v5', last_name='$v6', age='$v7', mail='$v8' where id_user=$v1");
        echo "El usuario con ID ".$v1." se ha actualizado correctamente";
    
}
?>