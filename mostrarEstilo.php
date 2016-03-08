<?php
# Recoge el estilo de la BBDD y lo devuelve en variables donde se pida
	include_once("mysql.inc.php");
	conecta($c);
		if($c==null) {
			
		}
		else {
			mysqli_select_db($c, "BlogDIW");
			$sql="SELECT * FROM diseno, estructura";
			$resultado=mysqli_query($c, $sql);
			if($resultado) {
				$filas=mysqli_num_rows($resultado);
				if($filas==0) {
					
				}
				else {
					while($registro=mysqli_fetch_array($resultado)) {
						$nombre = $registro['nombre'];
						$descripcion = $registro['descripcion'];	
						$color = $registro['color'];	
						$fondo = $registro['fondo'];

						$tamano = $registro['tamano'];
						$ancho = $registro['ancho'];
						$tipografia = $registro['tipografia'];								
					}
				}
			}
			else {
				$error=mysqli_error($c);
				
			}
		}
	mysqli_close($c);
?>