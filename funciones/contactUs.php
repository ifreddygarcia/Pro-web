<?php
require '../conexion/conexion.php';

$mailUser= "nhmsvl@gmail.com";
if (isset($_POST['enviar'])) {
	if (!empty($_POST['Correo']) && !empty($_POST['Nombre'])) {
		$asunto="Queja anónima";
		$msg=$_POST['Texto'];
		$header="From: noreply@example.com"."\r\n";
		$header.="Reply-To: noreply@example.com"."\r\n";
		$header."X-Mailer: PHP/".phpversion();
		$mail= @mail($mailUser,$asunto,$msg,$header);
		if($mail) {
echo'<script type="text/javascript">
    			alert("Correo enviado");
    			window.location.href="../paginaprincipal.php";
    		</script>';
			echo "<h4>Se ha enviado un mail a tu correo</h4>";
		}else{
			echo "<h4>No se pudo enviar el mail a tu correo</h4>";
		}
	}
}
?>