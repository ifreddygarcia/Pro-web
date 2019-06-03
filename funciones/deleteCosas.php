<?php
//Freddy
//Este archivo es la funcion que elimina un usuario
	//Referencia al archivo para crear conexión
require '../conexion/conexion.php';  

//si se detecta el boton como oprimido se ejecuta
if (isset($_GET['valor'])) {
	//guardamos el dato en una variable
    $que=$_GET['valor'];
    if ($que > 0) {
    	//con este ciclo obtenemos el nombre del usurio que se mostrara para saber que eliminaste
        $nombre=mysqli_query($conectar,"SELECT file_name FROM files where id_file=$que");
        while ($nom= mysqli_fetch_array($nombre)){
        	echo "El archivo ".$nom['file_name']." fue eliminado con exito";
        }
        //la consulta que elimina el usuario
        mysqli_query($conectar,"DELETE FROM files where id_file=$que");
    }
}





?>