<?php
    if(!empty($_POST["Registrar"])){
      if(!true){
            
            
        } else {
            
            $grupo = $_POST["grupo"];
            $profesor = $_POST["profesor"];
            $lab = $_POST["lab"];
            $materia = $_POST["materia"];
            $ciclo = $_POST["ciclo"];
            
            
          
          
                $consulta = "insert into list values('$grupo','$profesor','$lab','$materia','$ciclo')";
                
                $resultado = $conexion->query($consulta);
                
               // echo "Has ingresado";
               // header("location: ../Proyecto I/iniciosesion.php ");
                
          echo '<div class = "alert alert-danger"><center>Registro existoso</center></div>';
        
    }
}
        
?>