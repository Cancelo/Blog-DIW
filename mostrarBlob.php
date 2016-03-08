<?php
# Muestra la blob de la BBDD
	include_once("mysql.inc.php");
	conecta($c);
		if($c==null) {
			echo "Fallo de conexión";
		}
		else {
			mysqli_select_db($c, "BlogDIW");
			$sql="SELECT * FROM post where tipo='imagen' OR tipo='combinado'";
			$resultado=mysqli_query($c, $sql);
			if($resultado) {
				$filas=mysqli_num_rows($resultado);
				if($filas==0) {
					#echo "No hay fotos";
				}
				else {
					while($registro=mysqli_fetch_array($resultado)) {
						echo "
							<div class='thumb'>
								<a href='visualizar_blob.php?id=".$registro['id']."'><img alt='imagenGaleria' src='visualizar_blob.php?id=".$registro['id']."'/></a>
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