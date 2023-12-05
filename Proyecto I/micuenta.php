<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi cuenta</title>
	<link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
		</div>
	</header>
	<div class="capa"><p></p></div>

<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="principal.php">Toma de asistencia</a>
			<a href="#">Reportes de asistencias</a>
			<a href="#">Porcentajes</a>
			<a href="micuenta.php">Mi cuenta</a>
			<a href="iniciosesion.php">Salir de la cuenta</a>
		</nav>
		<label for="btn-menu">✖️</label>

    </div>
</div>
<br><br><br>
<center><H1 class="text-warning">Mi cuenta</H1></center>
<center><p class="text-warning">Si desear cambiar la contraseña, por favor llena los siguientes datos:</p></center>
    <center><input type="text" id="miCampoTexto" name="miCampoTexto" placeholder="Nombre"></center>
    <p></p>
    <center><input type="text" id="miCampoTexto" name="miCampoTexto" placeholder="Boleta"></center>
    <p></p>
    <center><input type="text" id="miCampoTexto" name="miCampoTexto" placeholder="Correo"></center>
    <p></p>
    <center><input type="password" id="miCampoTexto" name="miCampoTexto" placeholder="Ingresar nueva contraseña"></center>
    <p></p>
    <center><input type="password" id="miCampoTexto" name="miCampoTexto" placeholder="Confirmar nueva contraseña"></center>
    <p></p>
    <center><a name="IngresarA" id="IngeA" class="btn btn-outline-danger"" href="#" role="button">Confirmar</a></center>
</body>
</html>