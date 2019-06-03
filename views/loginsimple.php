<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Iniciar Sesión</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	
	.pull-left {
		color: white;
		align: center;
    	
	}
	
	.pull-right {
		color: white;
		align: center;
    	
	}
	.text-center {
		color: white;
		align: center;
    	
	}
	.login-form {
		width: 340px;
    	margin: 150px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #9368E9;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="conexion/loguear.php" method="post">
        <h2 class="text-center">Iniciar Sesión</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" required="required">
        </div>
        <div class="form-group">
            <input type="Password" class="form-control" placeholder="Contraseña" required="required" maxlength="8">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
            <a href="#" class="pull-right">¿Olvidaste tu contraseña?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Registrarse</a></p>
</div>
</body>
</html>                                		                            