<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
  </head>
  <body style="background: ; display: flex; justify-content: center; align-items: center; margin : 10%" >

      <div style="background: ; display: flex; justify-content: center; align-items: center;">
    
    <div>
        <form method="post" action="">
        
    <h1><center> Incio de sesión </center></h1>
        <p></p>
            
            <?php
            
               
            include("scripts/conexionbd.php");
            include("scripts/verifica.php");
            
            ?>
            
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white"  type="text" id="miCampoTexto" name="boleta" placeholder=" &nbsp Boleta"></center>
    <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white"  type="password" id="miCampoTexto" name="contra" placeholder=" &nbsp Contraseña"></center>
    <p></p>
    <p></p>
    <center><input name="IngresarA" id="btningresar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 70px" value="Ingresar"></center>
  
        
        <p></p>
        <br>
        <a name="RestablerC" id="RestA" class="btn btn btn-outline-warning" href="restablece.php" role="button">Olvidé mi contraseña</a>

        
        </form>
        
          </div>
        
      </div>
        
  </body>
</html>