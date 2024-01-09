<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de listas</title>
	<link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    
    <p></p>
    <!--center><p style="font-size: 35px "> &nbsp PANTALLA PRINCIPAL</p></center-->
    
    
    <div style="display: flex; margin-top: 1px; width: 85%; height: 100%;  position: relative; justify-content:center; align-items: center; padding: 1.25em">
        
        <aside  style="background:  #151515; float: left; width:45 ; height: 100%; margin: 1px; margin-right: 45px; margin-left: 15px; border-radius: 1em">
        
            
        <ul class="list-group" style="padding: 15px;">
 
    <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="principal.php">Toma de asistencia</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="RepAsistencia.php">Reportes de asistencias</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="porcentajes.php">Porcentajes</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="mcuenta.php">Mi cuenta</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="invitar.php">Invitar a encargado</a></li>
   <li class="list-group-item list-group-item-warning" style="background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="Incidencia.php">Incidencia</a></li>  
         

  <li class="list-group-item list-group-item-warning" style="margin-top:95px; background:  #151515; border-color: #151515;"><a  style="text-decoration: none; font-size: 25px; " href="iniciosesion.php">Salir de la cuenta</a></li>

        
        </ul>    
            
        </aside>
        
        
<section style=" background: #3d4042; width: 66%; display: ; height: 520px;  border-radius: 1em;  justify-content: centeer ; align-items: ; " >
                
  
        
        
     <h8 style=" margin-left: 15px; margin-top: 0px"> Mi cuenta </h8>
            
<div style="margin-top: 25px; display: flex; justify-content: center; align-items: center;">
    
    <div>
        
          <?php
              
                include("scripts/funct.php");
            
            ?>
        
        <center><p id="mensajeError" style="color: ; font-size: 30px;">&nbsp &nbsp <?php obtenerd($_SESSION['boleta'], "nombre"); ?></p></center>
        <center><p id="mensajeError" style="color: ; font-size: 30px;">&nbsp &nbsp <?php echo $_SESSION['boleta'] ?></p></center>
        <center><p id="mensajeError" style="color: ; font-size: 30px;">&nbsp &nbsp <?php obtenerd($_SESSION['boleta'], "correo"); ?></p></center><br>
        
        
        <input name="Registrar" id="btnregistrar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 35px; margin-left: 150px" value="Cambio de Contraseña">
        
    </div>     
        
</div>
        
                
        
        </section>
    </div>
    
</body>
</html>