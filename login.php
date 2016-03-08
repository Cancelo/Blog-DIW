<?php
	include("mysql.inc.php");

	if(!isset($_POST['usuario']) || !isset($_POST['pass'])) {
		echo "No se han recibido datos";
		#header("Location:index.php");
	}
	else {
		$usuario=$_POST['usuario'];
		$pass=$_POST['pass'];

		conecta($c);

		mysqli_select_db($c,"BlogDIW");

		$sql="select * from usuario where usuario='$usuario' and pass='$pass'";

		$resultado=mysqli_query($c,$sql);

		$registro=mysqli_fetch_array($resultado);

		$filas=mysqli_num_rows($resultado);

		if($resultado) {
			if($filas==0) {
				echo "No coincide login y pass";
				#header("Location:index.php");
			}
			else {
				# Correcto
				session_start();
				$_SESSION['usuario']=$registro['usuario'];
				header("Location:menu.php");
			}
		}
		else {
			echo "Error";
			#header("Location:index.php");
		}
		
		mysqli_close($c);
	}
?>