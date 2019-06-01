<!--By: Humberto-->
<!DOCTYPE html>
<html>
<head>
	<title>Actualize </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!--Segmento PHP para poder utilizar las funciones controladoras de consulta-->
	<?php
		include '../funciones/updateUsers.php';
		extractData($selectUser);
		
	?>
	<form action="../funciones/updateUsers.php" method="POST">
		<div>
			<h2> Actualize sus Datos: </h2>
			<div class="form-group">
				<label> Nombre: </label>
				<input type="text" name="nameUser" value="<?php echo $_SESSION['nombreUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label> Apellido: </label>
				<input type="text" name="lastNameUser" value="<?php echo $_SESSION['apellidoUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label> Edad: </label>
				<input type="text" name="ageUser" value="<?php echo $_SESSION['edadUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label> E-Mail: </label>
				<input type="text" name="mailUser" value="<?php echo $_SESSION['correoUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label> Contraseña: </label>
				<input type="text" name="passUser" value="<?php echo $_SESSION['passUser']; ?>"><br>
			</div>
			<button type="submit" class="btn btn-primary"> Actualizar </button>
		</div>
	</form>
</body>
</html>