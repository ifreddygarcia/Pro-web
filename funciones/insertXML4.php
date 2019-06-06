
<?php
	require '../conexion/conexion.php';
	$xml = simplexml_load_file("http://jsierra.turesidencial.com/empresas.xml") or die("Error: Cannot create object");

	foreach ($xml->children() as $row) {

	    //$id_user = $row->id_user;
	    $matricula4 = $row->matricula;
	    $nombre4 = $row->nombre;
	    $giro4 = $row->giro;
	    $direccion4 = $row->direccion;
	    $telefono4 = $row->telefono;
	    $email4 = $row->email;
	    $ciudad4 = $row->ciudad;
	    $municipio4 = $row->municipio;
	    $rfc4 = $row->rfc;
	    $codigo_postal4 = $row->codigo_postal;
	    $pais4 = $row->pais;
	    $titular4 = $row->titular;
	    $puesto4 = $row->puesto;
	    
	    $query="INSERT INTO equipo3(matricula,nombre,giro,direccion,telefono,email,ciudad,municipio,rfc,codigo_postal,pais,titular,puesto) VALUES ('$matricula4','$nombre4','$giro4','$direccion4','$telefono4','$email4','$ciudad4','$municipio4','$rfc4','$codigo_postal4','$pais4','$titular4','$puesto4');";

	    $sql = mysqli_query($conectar,$query);

	    if ($sql==TRUE) {
	    	echo "YAY";
	    }else{
	    	echo ":(";
	    	mysqli_error($conectar);
	    }



	}

?>