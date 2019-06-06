
<?php
	require '../conexion/conexion.php';
	$xml = simplexml_load_file("http://rubi.turesidencial.com/webservice/cms.xml") or die("Error: Cannot create object");

	foreach ($xml->children() as $row) {

	    //$id_user = $row->id_user;
	    $id1 = $row->id_user;
	    $usuario2 = $row->usuario;
	    $marca2 = $row->tipo;
	    $contrasena2 = $row->contrasena;
	    $estado2 = $row->estado;
	    
	    $query="INSERT INTO equipo3(id_user,usuario,tipo,contrasena,estado) VALUES ($id1,'$usuario2','$marca2','$contrasena2','$estado2');";

	    $sql = mysqli_query($conectar,$query);

	    if ($sql==TRUE) {
	    	echo "YAY";
	    }else{
	    	echo ":(";
	    	mysqli_error($conectar);
	    }



	}

?>