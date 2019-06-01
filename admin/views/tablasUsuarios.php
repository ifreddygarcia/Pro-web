<?php
require ("/proweb/conexion/conexion.php");
$consultar=mysqli_query($conectar,"SELECT *from usuarios");

?>
<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Estos son todos los usuarios disponibles</h4>
                                    <p class="card-category">Como administrador puede hacer lo que quiera</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>usuario</th>
                                            <th>contraseña</th>
                                        </thead>
                                        <tbody>
                                    <?php 
                                        while ($extraido= mysqli_fetch_array($consultar)){
                                                echo '<tr>';
                                                echo '<td>'.$extraido['usuario'].'</td>';
                                                echo '<td>'.$extraido['clave'].'</td>';
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