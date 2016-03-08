<?php
# Muestra los post de la BBDD
	include_once("mysql.inc.php");

	conecta($c);

	if($c==null) {
		echo "Fallo de conexión";
	}
	else {
		mysqli_select_db($c, "BlogDIW");

		$sql="SELECT * FROM post order by fecha desc";

		$resultado=mysqli_query($c, $sql);

		if($resultado) {

		$filas=mysqli_num_rows($resultado);

			if($filas==0) {
				echo "<div class='post'>Todavía no hay post :(</div>";
			}
			else {
				while($registro=mysqli_fetch_array($resultado)) {

					if($registro['tipo']=="texto") {
						echo "
							<div class='post'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>".$registro['fecha']." por ".$registro['autor']."</p>
								</div>
								<div class='contenidoPost'>".$registro['contenido']."</div>
							</div>
						";
					}
					else if($registro['tipo']=="imagen") {
						echo "
							<div class='post'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>".$registro['fecha']." por ".$registro['autor']."</p>
								</div>
								<img class='imagenPost' alt='imagenPost' src='visualizar_blob.php?id=".$registro['id']."'/>
							</div>
						";
					}
					else {
						echo "
							<div class='post'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>".$registro['fecha']." por ".$registro['autor']."</p>
								</div>
								<img class='imagenPost' alt='imagenPost' src='visualizar_blob.php?id=".$registro['id']."'/>
								<div class='contenidoPost'>".$registro['contenido']."</div>
							</div>
						";
					}
					/*echo "
						<div class='thumb'>
							<a href='visualizar_blob.php?id=".$registro['id']."''><img src='visualizar_blob.php?id=".$registro['id']."'/></a>
						</div>
					";*/									
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