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
		<header id="cabecera">
			<div id="logo">
				<h1>tuBlog</h1>
				<p style="color: #009688">Blog de ciencia y tecnología</p>
			</div>
			<p id="abrirMenu">MENU</p>
		</header>
		<div id="seccion"><i>&#9658 Estilo</i></div>
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
			<div id="diseno">
				<h3>Aquí puedes cambiar el diseño del Blog</h3>
				<form class="formEstilo" method="post" action="cambiar.php">
					<input type="text" name="nombreBlog" placeholder="$nombreDelBlog"/><br/><br/>
					<input type="text" name="descripcion" placeholder="$descripcionBlog"/>
					<br/>
					<br/>
					<br/>
					<label>Selecciona un color primario:</label>
					<div>
						<div id="color1" style="background-color: #009688;;"></div>
						<div id="color2" style="background-color: #2196F3;"></div>
						<div id="color3" style="background-color: #E91E63;"></div>
						<div id="color4" style="background-color: #FF9800;"></div>
					</div>
					<input type="text" name="color" hidden="hidden"/>
					<div class="clear"></div>
					<label>Selecciona un fondo:</label>
					<div>
						<div id="fondo1"></div>
						<div id="fondo2"></div>
						<div id="fondo3"></div>
						<div id="fondo4"></div>
					</div>
					<input type="text" name="fondo" hidden="hidden"/>
					<div class="clear"></div>
					<input type="submit" value="Guardar diseño"/>
				</form>
			</div>
			<div id="estructura">
				<h3>Aquí puedes cambiar la estructura del Blog</h3>
				<form class="formEstructura" method="post" action="cambiar.php">
					<input type="text" name="tamanoLetra" placeholder="Introduce el tamaño de letra"/><br/><br/>
					<input type="text" name="ancho" placeholder="Introduce el ancho del blog"/><br/><br/>
					<label>Elige una tipografía:</label><br/>
					<select name="tipografia">
						<option value="Defecto">Por defecto</option>
						<option value="Arial">Arial</option>
						<option value="Helvetica">Helvetica</option>
						<option value="Times New Roman">Times New Roman</option>
						<option value="Calibri">Calibri</option>
					</select><br/><br/>	
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