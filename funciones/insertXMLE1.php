
<?php
	require '../conexion/conexion.php';
	$xml = simplexml_load_file("http://sauluex.turesidencial.com/inventario.xml") or die("Error: Cannot create object");

	foreach ($xml->children() as $row) {

	    //$id_user = $row->id_user;
	    $id1 = $row->id;
	    $equipo1 = $row->equipo;
	    $marca1 = $row->marca;
	    $caracteristicas1 = $row->caracteristicas;
	    
	    $query="INSERT INTO equipo1(id,equipo,marca,caracteristicas) VALUES ($id1,'$equipo1','$marca1','$caracteristicas1');";

	    $sql = mysqli_query($conectar,$query);

	    if ($sql==TRUE) {
	    	echo "YAY";
	    }else{
	    	echo ":(";
	    	mysqli_error($conectar);
	    }



	}

?>