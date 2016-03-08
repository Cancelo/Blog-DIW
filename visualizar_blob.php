<?php 
	include_once("mysql.inc.php");

	conecta($c);

	mysqli_select_db($c,"BlogDIW");
	
	$sql = "SELECT imagen,tipoImagen FROM post WHERE id=".$_GET['id'];
	
	$resultado = mysqli_query($c,$sql);	
	$registro = mysqli_fetch_array($resultado);

	$imagen = $registro[0];

	$mime = $registro[1];

	header("Content-Type: $mime");

	echo $imagen;
?>