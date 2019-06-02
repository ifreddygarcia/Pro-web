<?php
require '../../conexion/conexion.php';  

if (isset($_GET['valor'])) {
    $quien=$_GET['valor'];
    if ($quien > 0) {
        $nombre=mysqli_query($conectar,"SELECT user FROM users where id_user=$quien");
        while ($nom= mysqli_fetch_array($nombre)){
        	echo "El usuario ".$nom['user']." fue eliminado con exito";
        }
        mysqli_query($conectar,"DELETE FROM users where id_user=$quien");
    }
}





?>