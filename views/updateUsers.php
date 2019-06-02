<!--By: Humberto-->
<!DOCTYPE html>
<html>
	
	
<head>
	<title>Actualizar Datos </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style type="text/css">

     
	.text-center {
		color: white;
		align: center;
    	
	}
	.forma {
		width: 340px;
    	margin: 150px auto;
	}
    .forma form {
    	margin-bottom: 15px;
        background: #9368E9;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .forma h2 {
        margin: 0 0 15px;
    }
    .form-group, .dato {
        min-height: 38px;
        border-radius: 2px;
    }
		
		
    }
    .btn-primary {        
        font-size: 15px;
        font-weight: bold;
    }
		
	.eti {        
        color: white;
		align: left;
		font-size: 15px;
		font-weight: bold;
    }

    </style>
</head>
	
<body>
	<!--Segmento PHP para poder utilizar las funciones controladoras de consulta-->
	<?php
		include '../funciones/updateUsers.php';
		extractData($selectUser);
		
	?>
	<div class="forma">
	<form action="../funciones/updateUsers.php" method="POST">
		
			<h2 class="text-center"> Actualizar datos: </h2>
			<div class="form-group">
				<label class="eti"> Nombre: </label>
				<input type="text" class=dato name="nameUser" value="<?php echo $_SESSION['nombreUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> Apellido: </label>
				<input type="text" class=dato name="lastNameUser" value="<?php echo $_SESSION['apellidoUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> Edad: </label>
				<input type="text" class=dato name="ageUser" value="<?php echo $_SESSION['edadUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> E-Mail: </label>
				<input type="text" class=dato name="mailUser" value="<?php echo $_SESSION['correoUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> Contraseña: </label>
				<input type="text" class=dato name="passUser" value="<?php echo $_SESSION['passUser']; ?>"><br>
			</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Actualizar </button>
		</div>
	</form>
	<p class="text-center"><a href="#">Regresar</a></p>
		</div>
</body>
</html>