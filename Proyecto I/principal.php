<!doctype html>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Toma de asistencia</title>
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
<center><H1 class="text-success">Toma de asistencia</H1></center>
<section align="right">
<a name="RegistrarL" id="RegiL" class="btn btn-outline-info" href="registrarlista.php">Registrar una lista</a>
</section>
<br>
<input type="text" id="buscG" name="buscaGrupo" placeholder="Grupo">&nbsp;<a name="" id="" class="btn btn-outline-success" href="#">Buscar</a>
<br><br><br>
<table class="table table-hover">
  <thead>
    <tr class="table-info">
      <th scope="col">Grupo</th>
      <th scope="col">Toma de asitencia</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row">El grupo</th>
      <td><a name="TomarA" id="TomaA" class="btn btn-light"" href="iniciarasistencia.php" role="button">Iniciar asistencia</a></td>

</body>
</html>