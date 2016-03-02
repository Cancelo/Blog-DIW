<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>tuBlog</title>
		<meta name="keywords" content=""/>
		<meta name ="description" content=""/>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript"></script>
	</head>
	<body>
		<header>
			<div id="logo">
				<h1>tuBlog</h1>
				<p style="color: #009688">Blog de ciencia y tecnología</p>
			</div>
			<p id="abrirMenu">MENU</p>
		</header>
		<div id="seccion"><i>&#9658 Portada</i></div>
		<div id="menu">
			<p id="cerrarMenu">VOLVER</p>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="">Galería</a></li>
				<li><a href="estilo.php">Estilo</a></li>
				<li><a href="menu.html">Nuevo post</a></li>
			</ul>
			<form method="post" action="login.php">
				<p><u>Iniciar sesión</u></p>
				<input type="text" name="user" placeholder="Usuario"/><br/>
				<input type="password" name="pass" placeholder="Contraseña"/><br/><br/>
				<input type="submit" value="ENTRAR"/>
			</form>		
		</div>
		<div id="contenido">
			<div id="posts">
				<div class="postTexto">
					<?php include("mostrarPost.php"); ?>
					<div class="cabeceraPost">
						<h3>Titulo del post</h3>
						<p>Por Rubén a 28/02/2016</p>
					</div>
					<div class="contenidoPost">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique in eaque, asperiores, explicabo iste, sapiente veritatis incidunt sed enim consequatur dolor labore amet officiis quis vitae maxime expedita aut.
					</div>
				</div>
				<div class="postImagen">
					<div class="cabeceraPost">
						<h3>Titulo del post</h3>
						<p>Por Rubén a 28/02/2016</p>
					</div>
					<img src="" alt="postImagen" width="100%" height="300px"/>
				</div>
				<div class="postCompleto">
					<div class="cabeceraPost">
						<h3>Titulo del post</h3>
						<p>Por Rubén a 28/02/2016</p>
					</div>
					<img src="" alt="postImagen" width="100%" height="300px"/>
					<div class="contenidoPost">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique in eaque, asperiores, explicabo iste, sapiente veritatis incidunt sed enim consequatur dolor labore amet officiis quis vitae maxime expedita aut.
					</div>
				</div>
			</div>
			<div id="lateral">
				<div id="banner">
					<img src="images/banner.png" alt="ads" width="100%" height="400px"/>
				</div>
				<div id="archivo">
					<h3>Archivo del blog</h3>
					<ul>
						<li>Enero (3)</li>
						<li>Febrero (1)</li>
						<li>Marzo (6)</li>
						<li>Abril (8)</li>
					</ul>
				</div>
			</div>
		</div>
		<footer>
			<p>tuBlog 2015 - Rubén Cancelo Rodríguez</p>
		</footer>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>