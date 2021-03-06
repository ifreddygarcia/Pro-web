<!--By: Humberto-->
<!--Nehemias, si ves este comentario-->
<!DOCTYPE html>
<html>
	
	
<head>

	<title>Actualizar Datos </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style type="text/css">

     .body{
     	  background: #9368E9;
     }
	.text-center {
		color: white;
		align: center;
    	
	}
	.forma {
		width: 340px;
    	margin: 10px auto;
	}
    .forma form {
    	
        background: #9368E9;
        
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
    .dato{
    	 width: 80%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  border: 1px solid #ccc;
		  border-radius: 4px;
    }
    .colort{
    	color: black;
    }

    </style>

	<title>Actualizar  </title>
	<!-- Instanciando bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
	
<body class="body">
<div class="container">
	<?php
		include '../funciones/updateUsers.php';
		extractData($selectUser);
		
	?>
	<div class="forma">
		<center>
	<form action="../funciones/updateUsers.php" method="POST">
		
			<h2 class="text-center"> Actualizar datos: </h2>
			<div class="form-group">
				<label class="eti"> Nombre: </label><br>
				<input type="text" class="dato" name="nameUser" value="<?php echo $_SESSION['nombreUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> Apellido: </label><br>
				<input type="text" class="dato" name="lastNameUser" value="<?php echo $_SESSION['apellidoUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> Edad: </label><br>
				<input type="text" class="dato" name="ageUser" value="<?php echo $_SESSION['edadUser']; ?>"><br>
			</div>
			<div class="form-group">
				<label class="eti"> E-Mail: </label><br>
				<input type="email" class="dato" name="mailUser" value="<?php echo $_SESSION['correoUser']; ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.]a-zA-Z]{1,5}"> <br>
			</div>
			<div class="form-group">
				<label class="eti"> Contraseña: </label><br>
				<input type="password" class="dato" name="passUser" value="<?php echo $_SESSION['passUser']; ?>" maxlength="8" id="password_confirm"><br>
				<input type="checkbox" onclick="verPass()">Mostrar contraseña
			</div>
			<div class="form-group">
				<label class="eti"> Confirma Contraseña: </label><br>
				<input class="dato" name="password_confirm" type="password" id="password_confirm" oninput="check(this)" maxlength="8"/>
			</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Actualizar </button>
		</div>
		<script language='javascript' type='text/javascript'>
	    	function check(input) {
	        if (input.value != document.getElementById('password_confirm').value) {
		            input.setCustomValidity('Las contraseñas no coinciden.');
		        } else {
		            // input is valid -- reset the error message
		            input.setCustomValidity('');
		        }
	    	}
	    	function verPass() {
				var x = document.getElementById("password_confirm");
					if (x.type === "password") {
						x.type = "text";
				  	}else{
				    	x.type = "password";
				  	}
				}
		</script>
	</form>

	<p class="text-center"><a href="../paginaprincipal.php" class="colort">Regresar</a></p>
</center>
		</div>

</div>
<script type="text/javascript">
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
</script>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		

</body>
</html>