<?php
require '../../conexion/conexion.php';  
$consultar=mysqli_query($conectar,"SELECT *from usuarios");

?>
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Estos son todos los usuarios disponibles</h4>
                                    <p class="card-category">Como administrador puede hacer lo que quiera</p>
                                    <a href="javascript:irFuncion();" onclick="irFuncion();">Ejecutar función PHP</a>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Id</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo</th>
                                            <th>Tipo de usuario</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <tbody>
                                    <?php 
                                        while ($extraido= mysqli_fetch_array($consultar)){
                                                echo '<tr>';
                                                echo '<td>'.$extraido['id'].'</td>';
                                                echo '<td><i class="oi oi-people"></i>'.$extraido['usuario'].'</td>';
                                                echo '<td>'.$extraido['clave'].'</td>';
                                                echo '<td>'.$extraido['nombre'].'</td>';
                                                echo '<td>'.$extraido['apellido'].'</td>';
                                                echo '<td>'.$extraido['correo'].'</td>';
                                                echo '<td>'.$extraido['tipo de usuario'].'</td>';
                                                echo '<td><a class="nav-link" href="#"><i class="oi oi-pencil"></i> </a></td>';


                                                echo '<td><a class="nav-link" href="#" onclick="irFuncion();"><i class="oi oi-delete"></i> </a></td>';


                                                
                                                echo '</tr>';
                                            }
                                    ?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


<script>
  function irFuncion(){
    $.ajax({
    // aqui va la ubicación de la página PHP
      url: 'deleteUsers.php',
      type: 'POST',
      dataType: 'html',
      data: { condicion: "ejecutarFuncion"},
      success:function(resultado){
       // imprime "resultado Funcion"
       alert(resultado);
      }
  }

    function borraruser()
    {
        $.ajax({
            type:'POST', //aqui puede ser igual get
            url: '../../admin/funciones/deleteUsers.php',//aqui va tu direccion donde esta tu funcion php
            data: {id:1,otrovalor:'valor'},//aqui tus datos
            success:function(data){
                //lo que devuelve tu archivo mifuncion.php
           },
           error:function(data){
            //lo que devuelve si falla tu archivo mifuncion.php
           }
         });
    }
</script>





<!-- 
<?php
echo "<br>";
echo '<table bgcolor="#ffffff" border="5" style="position:absolute;top:100px;left:600px;">';
echo '<caption><h2>Tabla de casas en Hogwarts  </h2></caption>';
echo '<tr>';
echo '<th>usuario</th>';
echo '<th>clave</th>';
echo '</tr>';
while ($extraido= mysqli_fetch_array($consultar)){
    echo '<tr>';
    echo '<td>'.$extraido['usuario'].'</td>';
    echo '<td>'.$extraido['clave'].'</td>';
    echo '</tr>';
}
echo '</table>';
?> -->