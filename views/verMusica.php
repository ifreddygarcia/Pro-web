<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
      .send{
        width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #9368E9;
      }
.send:hover{
background-color: #8000FF;
}
      .seleccionar{
        background-color: #2196F3;
width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
      }

      input[type="file"] {
    display: none;
}
  </style>
    <title></title>
</head>
<body>



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

             while ($arreidcloud= mysqli_fetch_array($qrh) )               //obtenemos un archivo y luego otro sucesivamente
                             {
                                 $idclo=$arreidcloud['id_cloud']; 
                                 $ruta=$arreidcloud['route'];            
                            }   


            $sql=mysqli_query($conectar,"SELECT *FROM directories where id_cloud_cloud = '$idclo' " );
            while ($arreidcloud2= mysqli_fetch_array($sql) )               //obtenemos un archivo y luego otro sucesivamente
                             {
                                if ($arreidcloud2['route_file'] == "/music/") {
                                    $ruta2nivel=$ruta.$arreidcloud2['route_file']; 
                                    $iddirectorio=$arreidcloud2['id_directories']; 
                                }
                                           
                            }  
                            //echo "$ruta2nivel";
            $sql23=mysqli_query($conectar,"SELECT *FROM files where id_direct_direct = '$iddirectorio' " );


?>
<form action="funciones/subirMusic.php" method="post" enctype="multipart/form-data">
<div class="container-fluid">
<label class="seleccionar">
    <input name="archivo" type="file" required="required" />
    Selecciona Archivo  ↑
</label>
    <input type="submit" value="Enviar" name="env" class="send"  >
</div>
</form>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Mi Música</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>nombre</th>
                                            <th>fecha</th>
                                            <th> Tamaño </th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                            while ($arr= mysqli_fetch_array($sql23) )               //obtenemos un archivo y luego otro sucesivamente
                                                {
                                                    echo '<tr>';
                                                        echo '<td>
                                                                <a href="'.$ruta2nivel.$arr['file_name'].'">'.$arr['file_name'].'</a>
                                                                </td>';
                                                         echo '<td>'.$arr['uploaded_at'].'</td>';
                                                         echo '<td>'.$arr['file_size'].' MB</td>';
                                                         echo '<td>
                                                <button id="" class="btn btn-danger"><i class="oi oi-delete"></i></button>
                                                </td>';
                                                     echo '</tr>';
                                                }   
                                            ?>
                                                
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!---->
                    </div>
                </div>
            </div>   

            
            </body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</html>