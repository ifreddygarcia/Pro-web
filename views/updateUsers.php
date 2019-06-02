<!--By: Humberto-->
<!--Nehemias, si ves este comentario-->
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar  </title>
	<!-- Instanciando bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="container">
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
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
</body>
</html>