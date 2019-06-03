

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


<?php
require '../conexion/conexion.php';  
        session_start();
        $sesion = $_SESSION['username'];

        //Con esta funcion guardamos el tipo de usuario que eres si es 0 eres normal y si es 1 eres admin
        $nombre=mysqli_query($conectar,"SELECT *FROM users where id_user >= 1");
        while ($nom= mysqli_fetch_array($nombre)){
            
            if ($nom['user']== $sesion) {
                $su=$nom['id_user'];
            }
        }

$qrh=mysqli_query($conectar,"SELECT *FROM cloud where id_user_user = '$su' " );

                                                    


?>


<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">mis doc</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>nombre</th>
                                            <th>fecha</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php 
                                            while ($arr= mysqli_fetch_array($qrh) )               //obtenemos un archivo y luego otro sucesivamente
                                                {
                                                    echo "<td><a href='".$arr['route']."'>".$arr['route']."</a</td>";
                                                     echo "<td>".$arr['created_at']."</td>";
                                                }   
                                            ?>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!---->
                    </div>
                </div>
            </div>   
