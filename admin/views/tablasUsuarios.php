<?php
require '../../conexion/conexion.php';  
$consultar=mysqli_query($conectar,"SELECT *from users");

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
                                        <tbody>
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
                                                echo '<td><a class="nav-link" href="#"><i class="oi oi-pencil"></i> </a></td>';
                                                echo '<td>
                                                <form  method ="POST" action="admin/funciones/deleteUsers.php">
                                                <button type="submit" name="no_me_quiero_ir" value="'.$extraido['id_user'].'" class="btn btn-danger"><i class="oi oi-delete"></i></button>
                                                </form>
                                                </td>';   
                                                echo '</tr>';
                                            }
                                    ?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>


