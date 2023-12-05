<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar asistencia</title>
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
<section align="righr">
<a name="RegistrarL" id="RegiL" class="btn btn-outline-info" href="#">Iniciar registro con QR</a>
</section>
<section>
<text align="right"><p>hola</p></text aling>
<p align="left" class="text-info">Listado de alumnos</p>
<br><br><br>
<table class="table table-hover">
  <thead>
    <tr class="table-info">
      <th scope="col">Número</th>
      <th scope="col">Nombre</th>
	  <th scope="col">Boleta</th>
	  <th scope="col">Asitencia</th>
	  <th scope="col">Incidencias</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row"></th>
	  <th scope="row"></th>
	  <th scope="row"></th>
	  <th scope="row"></th>
      <td><a name="TomarA" id="TomaA" class="btn btn-light"" href="#" role="button">Agregar incidencia</a></td>
</section>
<a name="RegistrarL" id="RegiL" class="btn btn-outline-info" href="#">Iniciar registro con QR</a>
</body>
</html>