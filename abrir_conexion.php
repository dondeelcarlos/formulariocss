<?php  

	$host = "localhost";
	$basededatos = "condominio";
	$usuariodb = "root";
	$clavedb = "";

	$tabla_db1 = "propietario";

	error_reporting(0);

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

	if ($conexion->connect_errno) {
		echo "Nuestro sitio experimenta fallos...";
		exit();
	}

?>