<?php include("mostrarEstilo.php") ?>
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
		<div id="seccion"><i>&#9658; Galeria</i></div>
		<div id="menu">
			<p id="cerrarMenu">VOLVER</p>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="galeria.php">Galería</a></li>

				<?php
					session_start();			// Si session no iniciada muestro login, sino muestro menu usuario, estilo y cerrar sesión

					if(!isset($_SESSION['usuario'])) {					
				?>
				<form method="post" action="login.php">
					<p><u>Iniciar sesión</u></p>
					<input type="text" name="usuario" placeholder="Usuario"/><br/>
					<input type="password" name="pass" placeholder="Contraseña"/><br/><br/>
					<input type="submit" value="ENTRAR"/>
				</form>
				<?php
					}
					else {
						$usuario=$_SESSION['usuario'];
				?>
				<li><a href="estilo.php">Estilo</a></li>
				<li><a href="menu.php">Menu de <?php echo $usuario; ?></a></li>
				<li><a href="cerrarSesion.php">Cerrar sesión</a></li>
				<?php
					}
				?>				
			</ul>				
		</div>
		<div id="contenido">
				<?php include("mostrarBlob.php"); ?>
		</div>
		<footer>
			<p>tuBlog 2015 - Rubén Cancelo Rodríguez</p>
		</footer>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>