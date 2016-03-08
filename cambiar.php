<?php
# Este php recibe los parametros de cambio de estilo o cambio de estructura y depues de validar que se ha recibido control, establece una opcion o otra.
# Si es diseño guarda en tabla diseno y si es estructura en tabla estructura
			include_once("mysql.inc.php");

			if(!isset($_POST['control'])) {
				echo "No se han recibido los parámetros.";
			}
			elseif($_POST['control'] == "") {
				echo "Campos vacíos";
			}
			else {
				if($_POST['control'] == "diseno") {
					if(!isset($_POST['nombre']) || !isset($_POST['descripcion']) || !isset($_POST['colorI']) || !isset($_POST['fondo'])) {
						header("Location:estilo.php");
					}
					elseif($_POST['nombre'] == "" || $_POST['descripcion'] == "" || $_POST['colorI'] == "" || $_POST['fondo'] == "") {
						header("Location:estilo.php");
					}
					else {

						$nombre = $_POST['nombre'];
						$descripcion = $_POST['descripcion'];
						$color = $_POST['colorI'];
						$fondo = $_POST['fondo'];

						conecta($c);

						if($c==null) {
							echo "Fallo de conexión";
						}
						else {
							mysqli_select_db($c, "BlogDIW");

							$sql="REPLACE INTO diseno VALUES (1, '$nombre', '$descripcion', '$color', '$fondo')";

							$resultado=mysqli_query($c, $sql);

							if($resultado) {

								$filas=mysqli_affected_rows($c);

								if($filas>0) {
									header("Location:estilo.php");
								}
								else {
									header("Location:estilo.php");
								}
							}
							else {
								$error=mysqli_error($c);
								echo $error;
							}
						}
						mysqli_close($c);
					}
				}

				if($_POST['control'] == "estructura") {
					if(!isset($_POST['tamano']) || !isset($_POST['ancho']) || !isset($_POST['tipografia'])) {
						header("Location:estilo.php");
					}
					elseif($_POST['tamano'] == "" || $_POST['ancho'] == "" || $_POST['tipografia'] == "") {
						header("Location:estilo.php");
					}
					else {
						$tamano = $_POST['tamano'];
						$ancho = $_POST['ancho'];
						$tipografia = $_POST['tipografia'];

						conecta($c);

						if($c==null) {
							echo "Fallo de conexión";
						}
						else {
							mysqli_select_db($c, "BlogDIW");

							$sql="REPLACE INTO estructura VALUES (1, '$tamano', '$ancho', '$tipografia')";

							$resultado=mysqli_query($c, $sql);

							if($resultado) {

								$filas=mysqli_affected_rows($c);

								if($filas>0) {
									header("Location:estilo.php");
								}
								else {
									header("Location:estilo.php");
								}
							}
							else {
								$error=mysqli_error($c);
								echo $error;
							}
						}
						mysqli_close($c);
					}
				}
			}			
?>