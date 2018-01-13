<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO PERSONAL</title>
	<link rel="stylesheet" href="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
<center><h1>PROPIETARIOS</h1></center>

<form method="POST" action="registro.php">

<div class="form-group">
	<label for="doc">Documento</label>
	<input type="text" name="doc" class="form-control" id="doc">
</div>

<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" class="form-control" id="nombre">
</div>

<div class="form-group">
	<label for="dir">Direccion</label>
	<input type="text" name="dir" class="form-control" id="dir">
</div>

<div class="form-group">
	<label for="tel">Telefono</label>
	<input type="text" name="tel" class="form-control" id="tel">
</div>

<center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>
</form>

<?php  

if (isset($_POST['btn1'])) {
	include("abrir_conexion.php");

	$doc = $_POST['doc'];
	$nombre = $_POST['nombre'];
	$dir = $_POST['dir'];
	$tel = $_POST['tel'];

	$conexion->query("INSERT INTO $tabla_db1(doc,nombre,direccion,telefono) values ('$doc', '$nombre', '$dir', '$tel')");

	include("cerrar_conexion.php");
	echo "Se ingresaron correctamente los datos";
}

?>


 </div>
  <div class="col-md-4"></div>
</div>

</body>
</html>

