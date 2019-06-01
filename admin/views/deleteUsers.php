<?php
// require '../../conexion/conexion.php';  
// $comando = $_POST['condicion'];
// $no=mysqli_query($conectar,"SELECT *from usuarios");

// $consultar=mysqli_query($conectar,"SELECT *from usuarios");
// echo $comando;
  

?>

<?php 
  // verificas que si llegue el parámetro que le estas enviando
 if(isset($_REQUEST["condicion"])){
  // si llega la condicion, y es igual a la condicion que necesitas para entrar ejecuta la función y devuelve el resultado
  if($_REQUEST["condicion"] == "ejecutarFuncion" ){
     echo funcionPHP();
     // salimos de la pagina php y devolvemos la respuesta
     exit();
  }else{
     echo "otra funcion o respuesta";
     // salimos de la pagina php y devolvemos la respuesta
     exit();
  }
 }

 function funcionPHP(){
    return "resultado Funcion";
 }

?>

<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2>
<h2>hollllalal</h2><h2>hollllalal</h2>
