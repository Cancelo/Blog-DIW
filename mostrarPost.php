<?php
	include_once("mysql.inc.php");

	conecta($c);

	if($c==null) {
		echo "Fallo de conexión";
	}
	else {
		mysqli_select_db($c, "BlogDIW");

		$sql="SELECT * FROM post";

		$resultado=mysqli_query($c, $sql);

		if($resultado) {

		$filas=mysqli_num_rows($resultado);

			if($filas==0) {
				echo "Todavía no ha post, pero puedes crear uno <a href='#'>aquí</a>";
			}
			else {
				while($registro=mysqli_fetch_array($resultado)) {

					if($registro['texto']) {
						echo "
							<div class='postTexto'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>Por ".$registro['autor']." a ".$registro['fecha']."</p>
								</div>
								<div class='contenidoPost'>".$registro['contenido']."</div>
							</div>
						";
					}
					else if($registro['imagen']) {
						echo "
							<div class='postImagen'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>Por ".$registro['autor']." a ".$registro['fecha']."</p>
								</div>
								<img src='' alt='postImagen' width='100%' height='300px'/>
							</div>
						";
					}
					else {
						echo "
							<div class='postCompleto'>
								<div class='cabeceraPost'>
									<h3>".$registro['titulo']."</h3>
									<p>Por ".$registro['autor']." a ".$registro['fecha']."</p>
								</div>
								<img src="" alt='postImagen' width='100%' height='300px'/>
								<div class='contenidoPost'>".$registro['contenido']."</div>
							</div>
						";
					}
					echo "
						<div class='thumb'>
							<a href='visualizar_blob.php?id=".$registro['id']."''><img src='visualizar_blob.php?id=".$registro['id']."'/></a>
						</div>
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