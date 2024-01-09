<?php

    if(!empty($_POST["IngresarA"])){
        if(empty($_POST["boleta"]) and empty($_POST["contra"])){
            
            echo '<div class = "alert alert-danger"><center>LOS CAMPOS ESTAN VACIOS</center></div>';
            
        } else {
            
            $boleta = $_POST["boleta"];
            $contra = $_POST["contra"];
            
            
            $sql = $conexion->query(" select * from users where boleta='$boleta' and contraseña='$contra' ");
            
            
            if($datos = $sql->fetch_object())
            {
               // echo "Has ingresado";
                
                session_start();
                
                $_SESSION['boleta'] = $boleta;
                
               // mysql_close($conexion);
                
                header("location: ../Proyecto I/principal.php ");
                
            } else {
                
                 echo '<div class = "alert alert-danger"><center>CREDENCIALES INCORRECTAS</center></div>';
                
            }
            
        }
    }
?>