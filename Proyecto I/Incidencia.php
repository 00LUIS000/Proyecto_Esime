<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Incidencias</title>
	<link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    
    <p></p>
    <!--center><p style="font-size: 35px "> &nbsp PANTALLA PRINCIPAL</p></center-->
    
    
    <div style="display: flex; margin-top: 1px; width: 85%; height: 100%;  position: relative; justify-content:center; align-items: center; padding: 1.25em">
        
        <aside  style="background:  #ffd3a9; float: left; width:45 ; height: 100%; margin: 1px; margin-right: 45px; margin-left: 15px; border-radius: 1em">
        
            
        <ul class="list-group" style="padding: 15px;">
            
    <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="principal.php">Toma de asistencia</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="RepAsistencia.php">Reportes de asistencias</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="porcentajes.php">Porcentajes</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="mcuenta.php">Mi cuenta</a></li>
  <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="invitar.php">Invitar a encargado</a></li>
   <li class="list-group-item list-group-item-warning" style="background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="Incidencia.php">Incidencia</a></li>  
         

  <li class="list-group-item list-group-item-warning" style="margin-top:95px; background:  #ffd3a9;"><a  style="text-decoration: none; font-size: 25px; " href="iniciosesion.php">Salir de la cuenta</a></li>
        
        </ul>    
            
        </aside>
    
    <section style=" background: lightblue; width: 66%; display: ; height: 520px;  border-radius: 1em;  justify-content: centeer ; align-items: ; " >
                
  
        
        
     <h8 style=" margin-left: 15px; margin-top: 0px">Pantalla de registro de Incidencias</h8>
            
<div style="background:     ; display: flex; justify-content: center; align-items: center;">
    
    <div>
        
        <form method="POST" action="" onsubmit="return validarContraseñas()">
        
    <h3 style="margin-top: 55px;"><center> Ingrese </center></h3>
            
            
            
        <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" id="nombre" name="nombre" placeholder="&nbsp Grupo" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" id="boleta" name="boleta" placeholder="&nbsp Profesor" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="email" id="correeo" name="correo" placeholder="&nbsp #Laboratorio" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="password" id="password" name="password" placeholder="&nbsp Materia" required></center>
    <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="password" id="repassword" name="repassword" placeholder="&nbsp Ciclo" required></center>
    <p></p>
   
            
   
         <center><span id="mensajeError" style="color: red;"></span></center> 
            <p></p><br>
            
    
        
        <input name="Registrar" id="btnregistrar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 15px; margin-left: 125px" value="Terminar registro de incidencias">
        
    
    
   

       </form>
            
    </div>     
        
</div>
        
                
        
        </section>
    </div>
    
</body>
</html>