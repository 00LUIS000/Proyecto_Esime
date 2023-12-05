<?php
    if(!empty($_POST["Registrar"])){
      if(empty($_POST["boleta"]) and empty($_POST["nombre"]) and empty($_POST['correo']) and empty($_POST['password'])){
            
            echo '<div class = "alert alert-danger"><center>LOS CAMPOS ESTAN VACIOS</center></div>';
            
        } else {
            
            $boleta = $_POST["boleta"];
            $contra = $_POST["password"];
            $correo = $_POST["correo"];
            $nombre = $_POST["nombre"];
            
            
            if(true)
            {
                
                $consulta = "insert into users values('$nombre','$boleta','$correo','$contra')";
                
                $resultado = $conexion->query($consulta);
                
               // echo "Has ingresado";
                header("location: ../Proyecto I/iniciosesion.php ");
                
            } else {
                
                 echo '<div class = "alert alert-danger"><center>CREDENCIALES INCORRECTAS</center></div>';
                
            }
    }
}
        
?>