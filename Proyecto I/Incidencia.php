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
                
  
        
        
     <h8 style=" margin-left: 15px; margin-top: 0px">Pantalla de registro de Incidencias</h8>
            
<div style="background: ; display: ; justify-content: center; align-items: center;">
    
    <div>
        
        <form method="POST" action="" onsubmit="return validarContraseñas()">
      
            
    <p></p> 
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 60px; border-radius: .5em; background: green;  border:1px solid green; color: white; margin-top: 20px" name="grupo" placeholder="&nbsp Grupo" required> 
   
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white" name="profesor" placeholder="&nbsp Profesor" required>
            
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white" name="lab" placeholder="&nbsp #Laboratorio" required>
    <p></p>
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 60px; border-radius: .5em; background: green;  border:1px solid green; color: white" name="ciclo" placeholder="&nbsp Ciclo" required> 
   
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white" name="nombre" placeholder="&nbsp Nombre" required>
            
    <input type="text" size=40 style="width:175px;  display: inline-block; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white" name="boleta" placeholder="&nbsp Boleta" required>
    <p></p>
               
            
            <center> 
                <!--
                <input type="textarea" size=40 style="width:500px; height: 250px; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white; margin-top: 45px" name="descripcion" placeholder="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Agregar descripcion de la incidencia" required>
            
                -->
            
                <textarea size=40 style="width:500px; height: 250px; margin-left: 40px; border-radius: .5em; background: green;  border:1px solid green; color: white; margin-top: 45px" name="descripcion" cols="40" rows="4" placeholder="&#10 &#10 &#10 &#10 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Agregar descripcion de la incidencia"></textarea>
                
                <?php
              
                include("scripts/conexionbd.php");
                include("scripts/regIncidencia.php");
            
            
            ?>
                
            </center>
   
            
   
         <center><span id="mensajeError" style="color: red;"></span></center> 
           <p></p>
            
    
        
        <input name="Registrar" id="btnregistrar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 15px; margin-left: 425px; margin-top: 15px" value="Terminar registro de incidencias">
        
    
    
   

       </form>
            
    </div>     
        
</div>
        
                
        
        </section>
    </div>
    
</body>
</html>