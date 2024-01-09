<?php

    
    function obtenerd ($boleta, $dato){
        
        include("scripts/conexionbd.php");
        
        $consulta = "SELECT $dato from users where boleta = '$boleta'; ";
        
        $resultado = $conexion->query($consulta);
        
        $val = $resultado->fetch_assoc();
        
        echo $val["$dato"];
    }
?>