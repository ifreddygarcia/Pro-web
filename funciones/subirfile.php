<?php
require '../conexion/conexion.php';  
        session_start();
        $sesion = $_SESSION['username'];

        //Con esta funcion guardamos el tipo de usuario que eres si es 0 eres normal y si es 1 eres admin
        $nombre=mysqli_query($conectar,"SELECT *FROM users where id_user >= 1");
        while ($nom= mysqli_fetch_array($nombre)){
            
            if ($nom['user']== $sesion) {
                $su=$nom['id_user'];
                $nsu=$nom['user'];
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
                                if ($arreidcloud2['route_file'] == "/files/") {
                                    $ruta2nivel=$ruta.$arreidcloud2['route_file']; 
                                    $iddirectorio=$arreidcloud2['id_directories'];
                                }
                                           
                            }  



        if(isset($_FILES['archivo'])){
            
                $archivoname= basename($_FILES['archivo']['name']);
                $archivoname2="data/users/$nsu/files/".$archivoname;

        if(mysqli_query($conectar,"INSERT INTO files (id_direct_direct,file_name,file_type) values ('$iddirectorio', '$archivoname', '')")){
                $target_path = "../".$ruta2nivel;
                $target_path = $target_path . basename( $_FILES['archivo']['name']); 

            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) { 
                echo "El archivo ". basename( $_FILES['archivo']['name']). " ha sido enviado";
                //Obtener el tamaño en Megabytes
                $kbSize = filesize($target_path);

                function kbToMb($kbSize){
                    $kbMb = ($kbSize  /  1024 ) /1024;
                    substr($kbMb,0,5);
                    echo "El tamaño es: ".substr($kbMb,0,5);
                };
                kbToMb($kbSize);
            } else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }
            
        }else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }


        }   



?>