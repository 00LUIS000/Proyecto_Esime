<!doctype html>
<?php ?>
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
    <section style="background: #3d4042; width: 66%; display: ; height: 520px;  border-radius: 1em;  justify-content: centeer ; align-items: ; " >
                
  
        
        
     <h8 style=" margin-left: 15px; margin-top: 0px">Pantalla de registro de lista de asistencia</h8>
            
<div style="background:     ; display: flex; justify-content: center; align-items: center;">
    
    <div>
        
        <form method="POST" action="" onsubmit="return validarContraseñas()">
        
    <h3 style="margin-top: 55px;"><center> Ingrese </center></h3>
            
            
            
        <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" name="grupo" placeholder="&nbsp Grupo" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" name="profesor" placeholder="&nbsp Profesor" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" name="lab" placeholder="&nbsp #Laboratorio" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" name="materia" placeholder="&nbsp Materia" required></center>
    <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" name="ciclo" placeholder="&nbsp Ciclo" required></center>
    <p></p>
   
            
               <?php
              
                include("scripts/conexionbd.php");
                include("scripts/regLista.php");
            
            
            ?>
    
            
            
         <center><span id="mensajeError" style="color: red;"></span></center> 
            <p></p><br>
            
    
        
        <input name="Registrar" id="btnregistrar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 35px; margin-left: 125px" value="Terminar registro">
        
    
    
   

       </form>
            
    </div>     
        
</div>
        
                
        
        </section>
    </div>
    
</body>
</html>