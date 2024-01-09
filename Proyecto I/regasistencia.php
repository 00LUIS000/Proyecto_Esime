<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Pantalla de resgistro de asistencia</title>
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
                
  
        
        
                 <h8 style=" margin-left: 35px; margin-top: 10px">Pantalla de registro de asistencia</h8> 
        
            
          <a style="margin-left: 120px; display: inline-block;  margin-top: 10px" name="ClicA" id="CliA" class="btn btn btn-outline-warning" role="button">Grupo</a>
        
        <p style="display: inline-block;  margin-top: 10px" > &nbsp &nbsp   &nbsp &nbsp</p>
        
        <a  style="display: inline-block;  margin-top: 10px"  name="ClicA" id="CliA" class="btn btn btn-outline-warning" role="button">Profesor</a><br>
            
         <form method="post" action="" target="descripcion">
             
             <input type="text" name="pag" placeholder="Escane aqui" style="margin-left: 65px; display: inline-block; width:165px; height: 75px;" class="btn btn-primary">
             
             <?php
             
                     
        if(empty($_POST["pag"])){
            
            echo '';
            
              } else {
             
               $url = $_POST["pag"];
                  
         
                    
                $content = file_get_contents($url);
            
            
            $posible_boleta = substr($content, strpos($content,"<div class='boleta'  >"));
            $posible_nombre = substr($content, strpos($content,"<div class='nombre'>"));

            $posible_final = strpos($posible_boleta, '</div>');
            $posible_final2 = strpos($posible_nombre, '</div>');

            $posible_boleta = substr($posible_boleta,0,$posible_final);
            $posible_nombre = substr($posible_nombre,0,$posible_final2);

                            //print("<br/>".$posible_boleta);
                           // print("<br/>".$posible_nombre);


            }
             ?>
    
     
             </form>
        
        <a style="margin-top:-75px; margin-left: 395px; display: inline-block" name="ClicA" id="CliA" class="btn btn btn-outline-warning"  role="button">ciclo</a>
        
        <p style="display: inline-block" > &nbsp &nbsp   &nbsp &nbsp</p>
        
        <a  style="margin-top:-75px; display: inline-block"  name="ClicA" id="CliA" class="btn btn btn-outline-warning"  role="button">#Laboratorio</a>
        
        
        <p></p>
        
        <p style="margin-top:-45px; margin-left: 50px; ">Listado de Alumnos</p><br>
        
          
            
        <center> <textarea size=40 style="width:96%; height: 350px; margin-left: 0px; border-radius: .5em; background: #3d4042;  border:1px solid white; color: white; margin-top: -40px" name="descripcion" cols="40" rows="4" placeholder="&#10 &#10 &#10 &#10 &#10 &#10 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Agregar descripcion de la incidencia"><?php //print("<br/>".$posible_boleta);
                           // print("<br/>".$posible_nombre);
?></textarea> </center>
                
   
          
            
        </section>
    </div>
    
</body>
</html>