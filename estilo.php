<?php 

include("mostrarEstilo.php");

session_start();

if(!$_SESSION['usuario']) {						// Comprueba si hay session iniciada
		header("Location:index.php");
	}
	else {
		$usuario=$_SESSION['usuario'];
	}
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
		<header id="cabecera">
			<div id="logo">
				<h1><?=$nombre?></h1>
				<p><?=$descripcion?></p>
			</div>
			<p id="abrirMenu">MENU</p>
		</header>
		<div id="seccion"><i>&#9658; Estilo</i></div>
		<div id="menu">
			<p id="cerrarMenu">VOLVER</p>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="galeria.php">Galería</a></li>
				<li><a href="estilo.php">Estilo</a></li>
				<li><a href="menu.php">Menu de <?php echo $usuario; ?></a></li>
				<li><a href="cerrarSesion.php">Cerrar sesión</a></li>			
			</ul>				
		</div>
		<div id="contenido">
			<?php include("mostrarEstilo.php"); ?>
			<div id="diseno">
				<h3>Aquí puedes cambiar el diseño del Blog</h3><br/>
				<form name="formEstilo" id="formEstilo" method="post" action="cambiar.php">
					<label>Nombre del blog:</label><br/>
					<input type="text" name="nombre" value="<?=$nombre?>"/><br/><br/>
					<label>Descripción del blog:</label><br/>
					<input type="text" name="descripcion" value="<?=$descripcion?>"/>
					<br/>
					<br/>
					<br/>
					<label>Selecciona un color primario:</label>
					<div>
						<div id="color1" style="background-color: #009688;"></div>
						<div id="color2" style="background-color: #2196F3;"></div>
						<div id="color3" style="background-color: #E91E63;"></div>
						<div id="color4" style="background-color: #FF9800;"></div>
					</div>
					<input type="text" name="colorI" value="<?=$color?>" hidden="hidden"/>
					<div class="clear"></div>
					<label>Selecciona un fondo:</label>
					<div>
						<div id="fondo1"><img src="images/bg1.png" alt="fondo1"></div>
						<div id="fondo2"><img src="images/bg2.png" alt="fondo2"></div>
						<div id="fondo3"><img src="images/bg3.png" alt="fondo3"></div>
						<div id="fondo4"><img src="images/bg4.png" alt="fondo4"></div>
					</div>
					<input type="text" name="fondo" value="<?=$fondo?>" hidden="hidden"/>
					<div class="clear"></div>
					<input type="text" name="control" value="diseno" hidden="hidden"/>
					<input type="submit" value="Guardar diseño"/>
				</form>
			</div>
			<div id="estructura">
				<h3>Aquí puedes cambiar la estructura del Blog</h3><br/>
				<form name="formEstructura" id="formEstructura" method="post" action="cambiar.php">
					<label>Tamaño de letra (px|em):</label><br/>
					<input type="text" name="tamano" value="<?=$tamano?>"/><br/><br/>
					<label>Ancho del blog (px|%):</label><br/>
					<input type="text" name="ancho" value="<?=$ancho?>"/><br/><br/>
					<label>Elige una tipografía:</label><br/>
					<select name="tipografia">
						<option value="Defecto">Por defecto</option>
						<option value="Arial">Arial</option>
						<option value="Helvetica">Helvetica</option>
						<option value="Times New Roman">Times New Roman</option>
						<option value="Calibri">Calibri</option>
					</select><br/><br/>
					<input type="text" name="control" value="estructura" hidden="hidden"/>
					<input type="submit" value="Guardar estructura"/>
				</form>
			</div>
		</div>
		<footer>
			<p>tuBlog 2015 - Rubén Cancelo Rodríguez</p>
		</footer>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>