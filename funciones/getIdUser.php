<!--Humberto-->
<!--Archivo que Obtiene el ID del usuario-->
<?php
	session_start();
	//Invocamos una conexion
	require '../conexion/conexion.php';
	//Invocamos al archivo de creación de directorios
	//Usuario actual
	$userSession = $_SESSION['username'];
	//------Query Select
	$selectQuery = "SELECT * FROM users WHERE user = '$userSession'";
	$selectUser = mysqli_query($conectar,$selectQuery);

	function getID($selectUser){
		//Arreglo donde se almacenaran los datos del usuario
		$datos =array();
		//Ciclo If que busca en la tabla users y valida si existe o no
		if (mysqli_num_rows($selectUser) > 0) {
			//Ciclo While que almacena en un array asociativo los valores del usuario activo para
			//posteriormente poder recorrer solo ese usuario
			while($row = mysqli_fetch_assoc($selectUser)){
        		$datos[] = $row;
    		}
    		//Foreach que recorre el arreglo donde estan los datos de la tabla del usuario activo
    		foreach ($datos as $dato) {
    			$_SESSION['idUser'] = $dato['id_user'];
    			$_SESSION['username'] = $dato['user'];
    		}
		}else {
	    	
	    	}
	};
	
?>