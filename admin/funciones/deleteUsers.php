<?php
require '../../conexion/conexion.php';  
//$quien=$_POST['no_me_quiero_ir'];

if (isset($_POST['no_me_quiero_ir'])) {
    $quien=$_POST['no_me_quiero_ir'];
    if ($quien >= 0) {
        mysqli_query($conectar,"DELETE FROM users where id_user=$quien");
        header("Location: ../../paginaprincipal.php");
    }
}


?>