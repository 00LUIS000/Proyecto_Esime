<!doctype html>
<?php ?>
<html lang="en">
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
  </head>
  <body style="background: ; display: flex; justify-content: center; align-items: center; margin : 7%">
    
    <!-- Optional JavaScript -->
<!--div style="background : ; border-radius: 1em; margin: 5em 25%; padding: 1em;"-->
    
<div style="background:     ; display: flex; justify-content: center; align-items: center;">
    
    <div>
        
        <form method="POST" action="" onsubmit="return validarContraseñas()">
        
    <h1><center> Registro </center></h1>
            
            
            
        <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" id="nombre" name="nombre" placeholder="&nbsp Nombre" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="text" id="boleta" name="boleta" placeholder="&nbsp Boleta" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="email" id="correeo" name="correo" placeholder="&nbsp Correo" required></center>
    <p></p>
    <center><input  style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="password" id="password" name="password" placeholder="&nbsp Contraseña" required></center>
    <p></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white" type="password" id="repassword" name="repassword" placeholder="&nbsp Confirmar contraseña" required></center>
    <p></p>
    <p></p>
            
            <?php
              
                include("scripts/conexionbd.php");
                include("scripts/registrar.php");
            
            
            ?>
   
         <center><span id="mensajeError" style="color: red;"></span></center> 
            <p></p>
            
    <center>
        
        <input name="Registrar" id="btnregistrar" class="btn btn-outline-danger"  type="submit" style=" padding: 3px 35px" value="Registrarse">
        
    </center>
    
    <p></p>
    
        
        <p>¿Ya cuentas con una cuenta?  &nbsp &nbsp &nbsp &nbsp</p>
        
        <a name="ClicA" id="CliA" class="btn btn btn-outline-warning" href="iniciosesion.php" role="button">Da clic aquí</a>

       </form>
            
    </div>     
        
</div>
    
      <script>
          
          
    function validarContraseñas() {
        var contraseña = document.getElementById("password").value;
        var recontraseña = document.getElementById("repassword").value;
        var mensajeError = document.getElementById("mensajeError");

        // Validar si las contraseñas son iguales
        
        if (contraseña !== recontraseña ) {
            mensajeError.textContent = "Las contraseñas no coinciden. Por favor, verifique.";
            return false;
        } else {
            mensajeError.textContent = ""; // Limpiar el mensaje de error si las contraseñas coinciden
            return true;
        }
    }
          
</script>
      
   </body>
</html>