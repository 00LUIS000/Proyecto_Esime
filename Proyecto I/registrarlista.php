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
    
    <!-- Optional JavaScript -->
    <center><p class="text-success">Ingrese los siguientes datos:</p></center>
    <center><input type="text" id="miCG" name="miCampoGrup" placeholder="Grupo"></center>
    <p></p>
    <center><input type="text" id="miCP" name="miCampoProf" placeholder="Profesor"></center>
    <p></p>
    <center><input type="text" id="miCL" name="miCampoLabo" placeholder="Num laboratorio"></center>
    <p></p>
    <center><input type="text" id="miCM" name="miCampoMate" placeholder="Materia"></center>
    <p></p>
    <center><input type="text" id="miCC" name="miCampoCicl" placeholder="Ciclo"></center>
    <p></p>
    <p></p>
    <center><a name="TerminarRegi" id="TerminarR" class="btn btn-outline-danger"" href="principal.php" role="button">Terminar registro</a></center>
  </body>
</html>