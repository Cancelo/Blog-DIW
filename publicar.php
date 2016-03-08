		<?php
		# Utilizado para guardar los post publicados, devuelve por get un parametro para éxito y para fallo
			include_once("mysql.inc.php");

			if(!isset($_POST['titulo']) || !isset($_POST['autor']) || !isset($_POST['tipo'])) {
				#echo "No se han recibido los parámetros.";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['titulo']=="" || $_POST['autor']=="" || $_POST['tipo']=="") {
				#echo "Parámetros vacíos.";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['tipo'] == "texto" && !isset($_POST['fichero'])) {
				#echo "No se han recibido parámetros para tipo texto.";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['tipo'] == "texto" && $_POST['fichero'] == "") {
				#echo "Parámetros vacíos para tipo texto.";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['tipo'] == "imagen" && !isset($_FILES['imagen'])) {
				#echo "No se han recibido parámetros para tipo imagen";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['tipo'] == "combinado" && (!isset($_POST['fichero2']) || !isset($_FILES['imagen']))) {
				#echo "No se han recibido parámetros para tipo combinado.";
				header("Location:menu.php?e=0");
			}
			elseif($_POST['tipo'] == "combinado" && $_POST['fichero2'] == "") {
				#echo "Parámetros vacíos para tipo combinado.";
				header("Location:menu.php?e=0");
			}
			# Intento de validación para solo imagenes segun el tipo mime del archivo, ya que me fallaba y por falta de tiempo no he podido terminarlo
			/*elseif(isset($_FILES['imagen']) && ($_FILES["imagen"]["type"] != "image/jpeg")) {
				header("Location:menu.php?e=0");
			}*/

			else {

				$titulo=$_POST['titulo'];
				date_default_timezone_set('Europe/Madrid');
				$fecha= date('Y-m-d H:i:s');
				$autor=$_POST['autor'];
				$tipo=$_POST['tipo'];

				if($tipo == "texto") {
					$fichero=$_POST['fichero'];
					$imagen=null;
					$tipoImagen=null;
				}
				elseif($tipo == "imagen") {
					$fichero=null;

					$archivo=$_FILES["imagen"]["tmp_name"];
					$tamanio=$_FILES["imagen"]["size"];
					$tipoImagen=$_FILES["imagen"]["type"];
					$nombre=$_FILES["imagen"]["name"];					
				}
				else {
					$fichero=$_POST['fichero2'];

					$archivo=$_FILES["imagen"]["tmp_name"];
					$tamanio=$_FILES["imagen"]["size"];
					$tipoImagen=$_FILES["imagen"]["type"];
					$nombre=$_FILES["imagen"]["name"];
				}

				if($tipo == "imagen" || $tipo == "combinado") {
					if ($archivo != "none" ) {
						$fp=fopen($archivo, "rb");
						$imagen=fread($fp, $tamanio); 
						$imagen=addslashes($imagen);

						fclose($fp);
					}
				}				

				conecta($c);

				if($c==null) {
					#echo "Fallo de conexión";
					header("Location:menu.php?e=0");
				}
				else {
					mysqli_select_db($c, "BlogDIW");

					$sql="insert into post values (0, '$fecha', '$titulo', '$autor', '$fichero', '$imagen', '$tipo', '$tipoImagen')";

					$resultado=mysqli_query($c, $sql);

					if($resultado) {

						$filas=mysqli_affected_rows($c);

						if($filas>0) {
							header("Location:menu.php?e=1");
						}
						else {
							#echo "No se han realizado cambios";
							header("Location:menu.php?e=0");
						}
					}
					else {
						$error=mysqli_error($c);
						echo $error;
					}
				}
				mysqli_close($c);
			}
?>