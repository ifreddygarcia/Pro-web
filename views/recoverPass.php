<!DOCTYPE html>
<html>
<head>
	<!-- Instanciando bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RecoverPass</title>
	<style type="text/css">
		.body{
     	  background: #9368E9;
     }
		.dato{
    	 width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
    }
    .boton{
    /*ancho*/
	  width: 20%;
      /*color de fondo*/
  background-color: #08088A;
  /*color de fuente*/
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  /*quita el borde grueso*/
  border: none;
  /*aplica un borde circular */
  border-radius: 4px;


}
.colort{
    	color: black;
    }
	</style>
</head>
<body class="body">
<div class="container">
	<center>
<form action="" class="form" method="POST">
	<h2 class="text-center"> Reestablecer contraseña </h2>
			<div class="form-group">
				<label class="eti"> Contraseña nueva </label><br>
				<input type="password" class="dato" name="nameUser" value=""><br>
			</div>
			<div class="form-group">
				<label class="eti"> Repetir </label><br>
				<input type="password" class="dato" name="lastNameUser" value=""><br>
			</div>
			
		<div class="form-group">
			<button type="submit" class="boton"> Reestablecer </button>
		</div>
		<p class="text-center"><a href="../index.php" class="colort">Regresar</a></p>
	
</form>
</center>
</div>
<!-- Scripts que trabajan con bootstrap para hacer la página responsive-->		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
</body>
</html>