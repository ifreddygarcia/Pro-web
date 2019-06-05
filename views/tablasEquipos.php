<?php 
	require '../conexion/conexion.php'; 

	$query = mysqli_query($conectar,"SELECT * FROM users");

	
	$xml = new DOMDocument("1.0");
	$xml->formatOutput=true;

	$users = $xml->createElement("users");
	$xml->appendChild($users);


	?>







<!--

<?php
/*

require "conexion.php";

$conexion = new mysqli($host,$user,$pass,$baseDatos);

if($conexion->connect_errno)
{
    echo "Error de conexion de la base datos".$conexion->connect_error;
    exit();
}
$sql = "select * from medicos";

$resultado = $conexion->query($sql);
*/
?>


-->
	<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1 align="center">LISTADO DE MEDICOS</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Id de usuario</td>
        <td>Usuario</td>
        <td>Contraseña</td>
        <td>Es admin(0 no, 1 si)</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
        <td>Correo</td>
        <td>Hora de creacion</td>
        <td>Ultimo update</td>
    </tr>
    <?php 
        while($datos=mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $datos["id_user"]?></td>
                <td><?php echo $datos["user"]?></td>
                <td><?php echo $datos["password"]?></td>
                <td><?php echo $datos["admin"]?></td>
                <td><?php echo $datos["name"]?></td>
                <td><?php echo $datos["last_name"]?></td>
                <td><?php echo $datos["age"]?></td>
                <td><?php echo $datos["mail"]?></td>
                <td><?php echo $datos["created_at"]?></td>
                <td><?php echo $datos["updated_at"]?></td>
            </tr>
            <?php   
        }

     ?>
    </table>
</body>
</html>
<?php 
/*

	while ($register=mysqli_fetch_array($query)) {
			
			$id_userT=$xml->createElement("id_user",$register['id_user']);
			$users->appendChild($id_userT);

			$usertableT=$xml->createElement("user",$register['user']);
			$users->appendChild($usertableT);

			$passwordT=$xml->createElement("password",$register['password']);
			$users->appendChild($passwordT);

			$adminT=$xml->createElement("admin",$register['admin']);
			$users->appendChild($adminT);
		 	
		 	$nameT=$xml->createElement("name",$register['name']);
			$users->appendChild($nameT);

			$lastnameT=$xml->createElement("last_name",$register['last_name']);
			$users->appendChild($lastnameT);

			$ageT=$xml->createElement("age",$register['age']);
			$users->appendChild($ageT);

			$mailT=$xml->createElement("mail",$register['mail']);
			$users->appendChild($mailT);

			$created_atT=$xml->createElement("created_at",$register['created_at']);
			$users->appendChild($created_atT);

			$updated_atT=$xml->createElement("updated_at",$register['updated_at']);
			$users->appendChild($updated_atT);

	}
	echo "<xmp>".$xml->saveXML()."</xmp>";
	*/
	$xml->save("cloud.xml");
?>