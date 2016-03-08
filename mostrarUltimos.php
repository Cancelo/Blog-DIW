<?php
# Muestra los últimos post, limitado a 3
	include_once("mysql.inc.php");

	conecta($c);

	if($c==null) {
		echo "Fallo de conexión";
	}
	else {
		mysqli_select_db($c, "BlogDIW");

		$sql="SELECT * FROM post order by fecha desc LIMIT 3";

		$resultado=mysqli_query($c, $sql);

		if($resultado) {

		$filas=mysqli_num_rows($resultado);

			if($filas==0) {
				echo "<div class='post'>Todavía no hay post :(</div>";
			}
			else {
				while($registro=mysqli_fetch_array($resultado)) {

					echo "
						<li>".$registro['titulo']."</li>
					";											
				}
			}
		}
			else {
				$error=mysqli_error($c);
				echo $error;
			}
		}
	mysqli_close($c);
?>