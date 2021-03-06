<!--Humberto-->
<!--Archivo que tiene la función de crear directorios, no se visualiza-->
<?php 
	//Referencia al archivo para crear conexión
	require '../conexion/conexion.php';
	//Variable que almacena el nombre de usuario para su carpeta principal
	$dirName = isset($_POST['username']);
	//Ruta absoluta donde estarán los usuarios
	$dirUsers = '../data/users/';

	function createUserDir(){
		//Variable que almacena el nombre de usuario para su carpeta principal
		$dirName = $_POST['username'];
		//Ruta absoluta donde estarán los usuarios
		$dirUsers = '../data/users/';
		//Ciclo que primero revisa si llegaron los datos del formulario
		if(isset($_POST['directoryUser'])){
			$fullRoute = $dirUsers.$dirName;
			//Ciclo que valida si existe primero el directorio
			if (!is_dir($dirUsers.$dirName)) {
				//Creación de directorio en /data/users/nombre_de_usuario
				$createDir = mkdir($fullRoute,0777, true);
				if ($createDir) {
					//Subdirectorios
					$subDirMusic = $fullRoute.'/music';
					$subDirPhotos = $fullRoute.'/photos';
					$subDirVideos = $fullRoute.'/videos';
					$subDirFiles = $fullRoute.'/files';
					//Creación de subdirectorios
					$createSudDirMusic = mkdir($subDirMusic,0777,true);
					$createSudDirPhotos = mkdir($subDirPhotos,0777,true);
					$createSudDirVideos = mkdir($subDirVideos,0777,true);
					$createSudDirFiles = mkdir($subDirFiles,0777,true);


					echo "El directorio fue creado correctamente!";
					echo "</br>";
				}else{
					echo "Ha ocurrido un error al crear el directorio :(";
					echo "</br>";
				}
			}else{
				echo "Este directorio ya existe";
				echo "</br>";
			}
		}else{
			echo "No pudimos crear el directorio :( ";
			echo "</br>";
		}
	};
?>