<!--Humberto-->
<!--Archivo que guarda en la tabla cloud la carpeta nube de cada usuario-->
<?php
	//Invocamos conexión a la BD
	require '../conexion/conexion.php';
	//Invocamos la función para obtener el Id del usuario actual
	//require '../funciones/getIdUser.php';
	//Invocamos a la creación de directorios
	require '../funciones/newDirectoryUser.php';
	//---------------------------------------------------------------------------------------
	//Variables
		//Obtenemos id del usuario
		//getID($selectUser);
		//$idUserCloud = $_SESSION['idUser'];
		//Obtenemos nombre de usuario
		//$userNameCloud = $_SESSION['username'];
		//Concatenamos para obtener la ruta completa
		//$cloudRoute = $dirUsers.$nsu;
	//Función para insertar en la tabla Cloud
	function insertCloud($su,$nsu,$conectar){
		//Querys
		$insertCloudQuery = "INSERT INTO cloud(id_user_user,route) VALUES ($su,'$nsu')";
		//Validación de Sentencia creada correctamente
		if ($conectar->query($insertCloudQuery) === TRUE) {
		    echo "Espacio en la nube creado! :)";
		    echo "<br>";
		}else {
    		echo "Error: " . $insertCloudQuery . "<br>" . $conectar->error;
		}
	};
	//insertCloud($idUserCloud,$cloudRoute,$conectar);

?>