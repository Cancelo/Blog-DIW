<?php
	include("mostrarEstilo.php");
	
	session_start();

	if(!$_SESSION['usuario']) {					// Comprueba que has session iniciada
		header("Location:index.php");
	}
	else {
		$usuario=$_SESSION['usuario'];
	}	

	include("./ckeditor/ckeditor.php");			// CKeditor

	$oFCKeditor=new CKeditor();

	$mi_ck['height']='300';
	$mi_ck['width']='900';
	$mi_ck['skin']="kama";
	$mi_ck['language'] = 'es';
?>
 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>tuBlog</title>
		<meta name="keywords" content=""/>
		<meta name ="description" content=""/>
		<link rel="stylesheet" href="css/style.php">
		<script type="text/javascript" src="./js/jquery-2.2.0.min.js"></script>
	</head>
	<body>
		<header>
			<div id="logo">
				<h1><?=$nombre?></h1>
				<p><?=$descripcion?></p>
			</div>
			<p id="abrirMenu">MENU</p>
		</header>
		<div id="menu">
			<p id="cerrarMenu">VOLVER</p>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="">Galería</a></li>
				<li><a href="estilo.php">Estilo</a></li>
				<li><a href="menu.php">Menu de <?php echo $usuario; ?></a></li>
				<li><a href="cerrarSesion.php">Cerrar sesión</a></li>
			</ul>	
		</div>
		<div id="seccion"><i>&#9658; Menú de <?php echo $usuario; ?></i></div>
		<div id="contenido">
			<?php include("alerta.php"); ?>
			<div id="seleccion1">
				<img class="imagenSeleccion grayscale" src="images/soloTexto.png" alt="soloTexto"/>
				<h3>Crear post de texto</h3>
				<p>Un post sin contenido multimedia. Estará compuesto por un título y texto al que podrás dar formato con un editor.</p>
			</div>
			<div id="seleccion2">
				<img class="imagenSeleccion" src="images/soloImagen.png" alt="soloImagen"/>
				<h3>Crear post de imagen</h3>
				<p>Un post de una sóla imagen. Estará compuesto por un título y una imagen, ideal para imagenes destacadas.</p>
			</div>
			<div id="seleccion3">
				<img class="imagenSeleccion" src="images/combinado.png" alt="combinado"/>
				<h3>Crear post de texto e imagen</h3>
				<p>Un post con imagen y texto. Estará compuesto por un título, una imagen y un texto que podrás dar formato con un editor.</p>
			</div>
		</div>

		<!-- Crear solo texto -->
		<div id="selec1Oculto">
			<div class="divOculto">
				<p id="cerrarSeleccion1">Cerrar ventana</p>
				<div class="crearOculto">
					<form method="post" action="publicar.php">
						<input class="titulo" type="text" name="titulo" size="30" placeholder="Introduce aquí el título" required/>
						<p class="usuario"><?php echo "Fecha y autor: ".date('d/m/Y')." por ".$usuario; ?></p>
						<input type="text" name="autor" value="<?=$usuario ?>" hidden="hidden" required/>
						<input type="text" name="tipo" value="texto" hidden="hidden" required/>
						<textarea name="fichero"></textarea>
						<?php
							$oFCKeditor->replace("fichero", $mi_ck);
						?>						
						<input class="botonPublicar" type="submit" value="PUBLICAR"/>
					</form>
				</div>
			</div>
		</div>

		<!-- Crear solo imagen -->
		<div id="selec2Oculto">
			<div class="divOculto">
				<p id="cerrarSeleccion2">Cerrar ventana</p>
				<div class="crearOculto">
					<form enctype="multipart/form-data" method="post" action="publicar.php">
						<input class="titulo" type="text" name="titulo" size="30" placeholder="Introduce aquí el título" required/>
						<p class="usuario"><?php echo "Fecha y autor: ".date('d/m/Y')." por ".$usuario; ?></p>
						<input type="text" name="autor" value="<?=$usuario ?>" hidden="hidden" required/>
						<input type="text" name="tipo" value="imagen" hidden="hidden" required/>
						<p class="nota">Asegurate de subir una imagen y no otro archivo. Se recomienda un ancho superior a 600px para la correcta visualización.</p>
						<input type="file" name="imagen" required/>
						<input class="botonPublicar" type="submit" value="PUBLICAR"/>
					</form>
				</div>
			</div>
		</div>
		<!-- Crear combinado -->
		<div id="selec3Oculto">
			<div class="divOculto">
				<p id="cerrarSeleccion3">Cerrar ventana</p>
				<div class="crearOculto">
					<form enctype="multipart/form-data" method="post" action="publicar.php">
						<input class="titulo" type="text" name="titulo" size="30" placeholder="Introduce aquí el título" required/>
						<p class="usuario"><?php echo "Fecha y autor: ".date('d/m/Y')." por ".$usuario; ?></p>
						<input type="text" name="autor" value="<?=$usuario ?>" hidden="hidden" required/>
						<input type="text" name="tipo" value="combinado" hidden="hidden" required/>
						<p class="nota">Asegurate de subir una imagen y no otro archivo. Se recomienda un ancho superior a 600px para la correcta visualización.</p>
						<input type="file" name="imagen" required/>
						<textarea name="fichero2"></textarea>
						<?php
							$oFCKeditor->replace("fichero2", $mi_ck);
						?>						
						<input class="botonPublicar" type="submit" value="PUBLICAR"/>
					</form>
				</div>
			</div>
		</div>
		<footer>
			<p>tuBlog 2015 - Rubén Cancelo Rodríguez</p>
		</footer>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>