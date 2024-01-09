<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    
</head>
<body>
    
    <p></p>
    <!-- 202223;-->
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
    
    <section style=" background: #3d4042; width: 66%; display: ; height: 520px;  border-radius: 1em;  justify-content: ; align-items: ; " >
                
  
        
        
                 <h8 style=" margin-left: 35px; margin-top: 10px">Pantalla de toma de asistencia por grupo</h8>
            
        <a style="height: 40px; margin-left: 250px; margin-top: 40px" name="ClicA" id="CliA" class="btn btn btn-outline-warning" href="registrarlista.php" role="button">Registrar una lista</a><br>
            
        
        <a style="margin-left: 40px; display: inline-block" name="ClicA" id="CliA" class="btn btn btn-outline-warning" href="iniciosesion.php" role="button">Buscar por ciclo</a>
        
        <p style="display: inline-block" > &nbsp &nbsp y  &nbsp &nbsp</p>
        
        <a  style="display: inline-block"  name="ClicA" id="CliA" class="btn btn btn-outline-warning" href="iniciosesion.php" role="button">Buscar por grupo</a>
        
        
        <p></p>
        
        <p style="margin-left: 50px; display: inline-block">Listado de toma de asistencia</p>
        
            <input style="border-radius: .5em; background: orange;  border:1px solid gray; color: white; margin-left: 155px; margin-bottom: 20px;" type="text" name="ciclo" placeholder="&nbsp Dato de Busqueda" required>
        
        <div style="display: flex; margin-top: -10px; height: ;  position: relative; justify-content:center; align-items: center; ">
            
            <div style="background: ; width: 95%;">
        
            
               <?php
              
                include("scripts/conexionbd.php");
                include("scripts/mostrar.php");
            
            
            ?>
            
            </div>
        
        </div>
          
            
        </section>
    </div>
    
</body>
</html>