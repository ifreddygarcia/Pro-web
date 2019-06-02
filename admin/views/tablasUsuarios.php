<?php
//freddy
//Referencia al archivo para crear conexión
require '../../conexion/conexion.php'; 
//consulta para obtener la tabla usuarios 
$consultar=mysqli_query($conectar,"SELECT *from users");


?>
<!-- eswte div muestra el resultado de los botones de eliminar y editar-->
<div id="resultado"></div>
<!-- Empieza el contenedor donde estar la tabla usuarios-->
<div class="container-fluid">
                    <!-- cada div tiene una clase de bootstrap que nos ayuda a darle una forma estetica a la tabla-->
                    <div class="row">
                        <!--tamaño de columan de la tabla -->
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <!-- cabeza de la tabla-->
                                <div class="card-header ">
                                    <h4 class="card-title">Estos son todos los usuarios disponibles</h4>
                                    <p class="card-category">Como administrador puede hacer lo que quiera</p>
                                </div>
                                <!--encabezados de la tabla estos son estaticos -->
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <!-- Son los titulos de la tabla-->
                                        <thead>
                                            <th>Id</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Tipo de usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Edad</th>
                                            <th>Correo</th>
                                            <th>Creacion</th>
                                            <th>Modificacion</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <!--inicia Body de la tabla -->
                                        <tbody>
                                            <!--Aqui empieza una mezcla con php y html
                                            incrustamos codigo php para hacer un ciclo que va a ir leyendo el resultado de la consulta que vimos hasta arriba
                                            ahora el resultado le agregamos las etiquetas html de la tabla para hacer que el navegador los entienda como tl -->
                                    <?php 
                                        while ($extraido= mysqli_fetch_array($consultar)){
                                                echo '<tr>';
                                                echo '<td>'.$extraido['id_user'].'</td>';
                                                echo '<td><i class="oi oi-people"></i>'.$extraido['user'].'</td>';
                                                echo '<td>'.$extraido['password'].'</td>';
                                                echo '<td>'.$extraido['admin'].'</td>';
                                                echo '<td>'.$extraido['name'].'</td>';
                                                echo '<td>'.$extraido['last_name'].'</td>';
                                                echo '<td>'.$extraido['age'].'</td>';
                                                echo '<td>'.$extraido['mail'].'</td>';
                                                echo '<td>'.$extraido['created_at'].'</td>';
                                                echo '<td>'.$extraido['updated_at'].'</td>';

                                                //aqui va el boton de editar el cual tambien tiene un script que hace que nos llame al documento php que nos mostrara
                                                // la parte de editar, esto lo mostrara dentro del div de resultado
                                                echo '<td>
                                                <button id="11'.$extraido['id_user'].'" type="submit" value="'.$extraido['id_user'].'" class="btn btn-danger"><i class="oi oi-pencil"></i></button>                        
                        <script>
                                $(document).ready(function(){
                                    $("#11'.$extraido['id_user'].'").click(function(){

                                        var nombre_usuario = $("#11'.$extraido['id_user'].'").val();

                                        $.get("admin/views/signUpAdmin.php", {valor:nombre_usuario}, function(datos){
                                            $("#resultado").html(datos);
                                        });

                                    });
                                });
                        </script>
                                                </td>';
                                                //lo mismmo que el anterior peropara el de eliminar
                                                echo '<td>
                                                <button id="'.$extraido['id_user'].'" type="submit" name="no_me_quiero_ir" value="'.$extraido['id_user'].'" class="btn btn-danger"><i class="oi oi-delete"></i></button>
                                                <script>
                                $(document).ready(function(){
                                    $("#'.$extraido['id_user'].'").click(function(){

                                        var nombre_usuario = $("#'.$extraido['id_user'].'").val();

                                        $.get("admin/funciones/deleteUsers.php", {valor:nombre_usuario}, function(datos){
                                            $("#resultado").html(datos);
                                        });

                                    });
                                });
                        </script>
                                                

                                                </td>';   
                                                echo '</tr>';
                                            }
                                    ?>    <!--Aqui finalizo el ciclo que lee los datos de las tablas -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>

