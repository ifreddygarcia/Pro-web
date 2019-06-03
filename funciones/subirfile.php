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



        if(isset($_FILES['archivo'])){
            
                $archivoname= basename($_FILES['archivo']['name']);
                $archivoname2="data/users/$nsu/files/".$archivoname;

        if(mysqli_query($conectar,"INSERT INTO cloud (id_cloud,id_user_user,route) values (NULL, '$su', '$archivoname2')")){
                $target_path = "../data/users/$nsu/files/";
                $target_path = $target_path . basename( $_FILES['archivo']['name']); 

            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) { 
                echo "El archivo ". basename( $_FILES['archivo']['name']). " ha sido enviado";
            } else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }
            
        }else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }


        }   



?>