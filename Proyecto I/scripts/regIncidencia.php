<?php
    if(!empty($_POST["Registrar"])){
      if(!true){
          
        } else {
            
            $grupo = $_POST["grupo"];
            $profesor = $_POST["profesor"];
            $lab = $_POST["lab"];
            $ciclo = $_POST["ciclo"];
            $nombre = $_POST["nombre"];
            $boleta = $_POST["boleta"];
            $descripcion = $_POST["descripcion"];
            
            
          
          
                $consulta = "insert into incidence values('$grupo','$profesor','$lab','$ciclo','$nombre','$boleta','$descripcion')";
                
                $resultado = $conexion->query($consulta);
                
               // echo "Has ingresado";
               // header("location: ../Proyecto I/iniciosesion.php ");
         
          if($resultado){
              
            echo '<div class = "alert alert-danger"><center>Registro existoso</center></div>';
              
          }else{
              
              echo $descripcion;
             
          }
    }
}
        
?>