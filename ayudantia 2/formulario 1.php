<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de mierda</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 well">

<h1>Alumno</h1>
<form method="POST" action="recibe.php" enctype="multipart/form-data">
Nombre:
<br>
	<input type="text" name="nombre">
	<br>
Apellido:
<br>
	<input type="text" name="Apellido">
<br>
Rut:
<br>
	<input type="text" name="Rut">
<br>
<input type="hidden" name="alumno_formulario">
<br>
<input type="submit" name="Enviar" class="btn btn-danger">

</form>
	</div>

		<div class="col-md-6 well">
			<h1>Ramo</h1>
			<br>

							<form action="recibir.php" method="POST" enctype="multipart/form-data">

								Ramo:
								<br>
								<input type="text" name="ramo">
								<br>
								Nota:
								<br>
								<input type="text" name="nota">
								<br>
								<br>
								<input type="hidden" name="ramo_formulario">
								<input type="submit" name="Enviar" class="btn btn-danger">

							</form>
		</div>
	</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>