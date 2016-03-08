<?php header("Content-type: text/css");

	# Utlizo php para darle cabecera de hoja de estilo y la interprete como tal.
	# En función de los parametros recogidos de la BBDD se establecen los colores y tipografia por defecto

	include_once("../mostrarEstilo.php");

	if($color == "color1") {
		$principal = "#009688";
		$claro = "#4DB6AC";
		$masClaro = "#E0F2F1";
		$oscuro = "#004D40";
	}
	if($color == "color2") {
		$principal = "#2196F3";
		$claro = "#64B5F6";
		$masClaro = "#E3F2FD";
		$oscuro = "#0D47A1";
	}
	if($color == "color3") {
		$principal = "#E91E63";
		$claro = "#F06292";
		$masClaro = "#FCE4EC";
		$oscuro = "#880E4F";
	}
	if($color == "color4") {
		$principal = "#FF9800";
		$claro = "#FFB74D";
		$masClaro = "#FFF3E0";
		$oscuro = "#E65100";
	}

	if($tipografia == "Defecto") {
		$tipografia = "Lato, Sans-Serif";
	}
?>
/*
	OTROS COLORES: #FFF, #000;

	Para facilitar la lectura de este archivo se ha creado un índice, así se puede 
	realizar una busqueda con editor.

		1. 	General
		2. 	Cabecera
		3. 	Menu
		4. 	Formularios
		5. 	Indicador de seccion
		6. 	Contenido
		7. 	Barra lateral
		8. 	Pie de pagina
		9. 	Menu.php
		10. Estilo.php
		11. Galeria.php
*/

/*--- GENERAL ---*/
@import url(https://fonts.googleapis.com/css?family=Lato);	/*Importo fuente de texto Lato*/
* {
	margin: 0;			/*Elimino margin y pading por defecto del navegador*/
	padding: 0;
}

.clear {				/*Utlizado para limpiar la herencia de float*/
	clear: both;
}

body {
	font-size: <?=$tamano?>;			/*Establece el tamaño de fuente de la BBDD*/
	width: <?=$ancho?>;					/*Establece el ancho del blog recogido en la BBDD*/
	margin: 0 auto;
	background-image: url('../images/<?=$fondo?>');			/*Recopge el nombre del archivo de fondo de la BBDD*/
	font-family: <?=$tipografia?>;							/*Recoge la tipografia de la BBDD*/
}
/*--- CABECERA ---*/
header {
	height: 60px;
	background-color: white;
	padding: 30px;
	box-shadow: 0px 0px 5px gray;			/*Aplica un sombreado al header*/
}

#logo {
	float: left;				/*El logo flota a la izquierda*/
	cursor: pointer;			/*Hace que el cursor sea una mano al estar sobre el elemento*/
}

#logo p {
	color: <?=$principal?>;			/*Toma el color de la variable establecida anteriormente*/
}
/*--- MENU ---*/
#abrirMenu {
	float: right;		/*Div encargado de abrir el menu*/
	color: white;
	padding: 20px;
	cursor: pointer;
	background-color: <?=$principal?>;
	border-radius: 10px;					/*Borde de radio 10px*/
}

#abrirMenu:hover {
	box-shadow: 0px 0px 7px gray;			/*Al hacer hover muestra un sombreado con una transition 0.35s*/
	transition: 0.3s;
}

#cerrarMenu {
	margin: 50px 30px 30px 30px;		/*Elemento encargado de cerrar el menu*/
	float: right;
	cursor: pointer;
}

#cerrarMenu:hover {
	text-decoration: underline;			/*Se subraya al hacer hover*/
}

#menu {
	height: 800px;
	width: <?=$ancho?>;						/*Toma ancho y color de la BBDD*/
	background-color: <?=$principal?>;
	text-align: center;
	color: white;

	position: absolute;				/*Tiene una posicion absoluta, se encuentra 800px por encima de la web, mediante jquery cambiamos*/
	top: -800px;					/*esta propiedad para que se deslice hacia abajo.*/

	transition: ease 1s;			/*Transition crea el efecto de desplazamiento vertical. SIN esto cambiaría la posición instantaneamente*/
}

#menu ul {
	margin-top: 100px;
}

#menu ul li {
	margin-bottom: 30px;
	font-size: 2em;				/*Aumento el tamño de los li del menu al doble de por defecto*/
	list-style: none;
}

#menu ul li a {						/*Quita la decoración del texto*/
	text-decoration: none;	
	color: white;
	text-transform: uppercase;		/*Transforma a mayusculas el texto*/	
}

#menu ul li a:hover {				/*Al hacer hover aumenta el tamaño con una transition*/
	font-size: 1.1em;
	transition:  0.3s;
}

/*--- FORMULARIOS ---*/
#menu form {
	width: 200px;
	background-color: <?=$claro?>;		/*Recoge el valor de color establecido anteriormente*/
	margin: 0 auto;						/*Centra el formulario*/
	padding: 20px;
	border-radius: 1px;
}

input[type=text] {
	background-color: transparent;		/*Modifico el input tipo text: bg transpqrente, solo borde inferior*/
    border: none;
    border-bottom: 1px solid white;
    margin-top: 20px;  
    color: white;						/*Color blanco el texto*/
}

input[type=text]:focus {				/*Elimina el resalte exterior que viene por defecto al hacer focus*/
	outline: none;
}

input[type=password] {					/*Modifico el input tipo password, similar al anterior*/
	background-color: transparent;
    border: none;
    border-bottom: 1px solid white;
    margin-top: 20px;
    color: white;
}

input[type=password]:focus {
	outline: none;
}

::-webkit-input-placeholder { color: <?=$oscuro?>; } /* WebKit */			/*Cambia el color del placeholder. Compatiblidad con navegadores*/
:-moz-placeholder { color: <?=$oscuro?>; } /* Firefox 18- */
::-moz-placeholder { color: <?=$oscuro?>; } /* Firefox 19+ */
:-ms-input-placeholder { color: <?=$oscuro?>; } /* IE 10+ */

input[type=submit] {								/*Modifico el estilo del submit. Similar a anteriores pero ocupa el 100% de su contenedor*/
	background-color: transparent;
    border: 1px solid white;
    padding: 10px;
    color: white;
    width: 100%;
}

input[type=submit]:hover {						/*Al hacer hover el fondo cambia a blanco y el texto al color claro de la BBDD, con una transition*/
	background-color: white;
    border: 1px solid white;
    padding: 10px;
    color: <?=$claro?>;
    width: 100%;

    transition: 0.5s;
}

textarea {							/*Tamaño y margen de textarea*/
	width: 100%;
	margin-bottom: 10px;
}

.usuario {						/*Reduce el tamaño de fuente y aplica el color masClaro establecido anteriormente*/
	font-size: 0.9em;
	color: <?=$masClaro?>;
	padding: 20px;
}

.titulo {
	font-size: 1.5em;
}

/*--- INDICADOR DE SECCIÓN ACTUAL ---*/
#seccion {
	margin-left: 50px;				/*Le aplica margen iquierdo y superior, aplica el color principal establecido*/
	margin-top: 20px;
	color: <?=$principal?>;
	font-size: 0.7em;
}

/*--- CONTENIDO ---*/
#contenido {					/*Contenedor principal, se repite en todas las páginas de la web*/
	margin: 50px;
	margin-top: 20px;
}

#posts {				/*Contenedor de posts, flota a la izquierda*/
	float: left;
	width: 65%;
}

.cabeceraPost {
	margin-bottom: 10px;
}

.cabeceraPost h3 {
	color: <?=$principal?>;
}

.post {								/*Post individuales es una clase ya que se repiten, lo genera php en función del BBDD*/
	background-color: white;
	padding: 10px;
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 20px;
}

.imagenPost {
	width: 100%; 
	
	border: 1px solid gray;
}

/*--- BARRA LATERAL ---*/
#lateral {							/*Barra lateral que contien ads y archivo del blog. Flota a la derecha tiene un tamaño del 30% de su contenedor padre*/
	float: right;
	width: 30%;
	margin-bottom: 30px;
}

#banner {						/*Banner dentro de lateral, con margen inferior de 20px*/
	margin-bottom: 20px;
}

#banner img {
	width: 100%;
	height: 400px;
}

#archivo {						/*Ultimos post,dentro de lateral, padding 30px y sombra gris*/
	background-color: white;
	padding: 30px;
	box-shadow: 0px 0px 5px gray;
}

#archivo li {
	margin-left: 20px; 
}

@media screen and (max-width: 900px) {			/*Si la resolucion es menor de 900px el contenedor posts aumentara al 100% y lateral no aprecerá*/
	#posts {
		float: left;
		width: 100%;
	}
	#lateral {
		display: none;
		margin-bottom: 30px;
	}
}

/*--- PIE DE PÁGINA ---*/
footer {								/*color oscuro recogido de la BBDD, limpia el posible float heredado con clear:both evitando que se situen*/
	background-color: <?=$oscuro?>;		/*a los lados elementos*/
	clear: both;
	text-align: center;
	height: 40px;
	box-shadow: 0px 0px 5px gray;
	padding-top: 20px;
	color: white;
}

/*--- MENU.PHP ---*/
#alerta {
	background-color: #EF9A9A;			/*Div oculto que se muestra de un color rojo cuando se recibe el error del PHP*/
	text-align: center;
	padding: 10px;
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 20px;
}

#exito {
	background-color: #81C784;			/*Div oculto que se muestra de un color verde cuando se recibe exito del PHP*/
	text-align: center;
	padding: 10px;
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 20px;
}

#seleccion1, #seleccion2, #seleccion3 {
	height: 150px;
	background-color: white;					/*Selecciones para crear post, alto determinado, fondo blanco, sombra, margen inferior y padding*/
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 20px;
	padding: 10px;
}

#seleccion1:hover, #seleccion2:hover, #seleccion3:hover {
	background-color: #E0F7FA;						/*Al hacer hover sobre estas secciones, cambiaran de color con una transition de 1s y el cursor*/
	transition: 1s;									/*pasará a ser una mano*/
	cursor: pointer;
}

.imagenSeleccion {
	float: right;
}

#selec1Oculto, #selec2Oculto, #selec3Oculto {
	visibility: hidden;								/*Ocultos hasta que ocurra el evento*/
}

.divOculto {										/*Div que simula un efecto transparente, es padre de los divs de crear post*/
	width: 100%;			
	height: 830px;									
	background: rgba(0, 0, 0, 0.8);					/*Aplica la transparencia. Probé con opacity pero los hijos la heredaban y no conseguí solucionarlo*/
	position: absolute;
	top: 0;											/*Posicion absoulta, top=0, en la parte superior del navegador*/
	border-radius: 2px;
}

.crearOculto {
	background-color: <?=$principal?>;				/*Div con color establecido en la variable anteriormente establecida*/
	width: 900px;
	height: 620px;
	margin: 0 auto;								/*Ancho y alto establecido, centrado y con padding*/
	padding: 20px;
}

#cerrarSeleccion1, #cerrarSeleccion2, #cerrarSeleccion3 {
	color: white;
	text-align: center;							/*Cierra la seleccion actual. Es un texto con color banco, subrayado, y el cursor cambia al estar sobre el*/
	padding: 5px;
	text-decoration: underline;
	cursor: pointer;
}

.botonPublicar {
	margin-top: 20px;
}

.nota {
	color: white;
	font-size: 0.8em;
}

/*--- ESTILO.PHP ---*/

#diseno {
	width: 45%;						/*Contenedor de diseño del blog, flota a la izquierda, ancho 45%, sombra gris y padding*/
	float: left;
	background-color: white;
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 30px;
	padding: 10px;
}

#estructura {
	width: 45%;						/*Contenedor de estructura del blog. Igual que anterior pero float a la derecha*/
	float: right;
	background-color: white;
	box-shadow: 0px 0px 5px gray;
	margin-bottom: 30px;
	padding: 10px;
}

#formEstilo input[type=text], #formEstructura input[type=text] {			/*Se modifican las diferentes entradas de los formularios de diseño*/
	background-color: transparent;											/*y estructura. Similar a los formularios de inicio de sesión pero,*/
    border: none;															/*variando los colores. Por lo tanto no se comentará*/		
    border-bottom: 1px solid <?=$claro?>;
    margin-top: 20px;  
    color: <?=$claro?>;		
}

#formEstilo input[type=submit], #formEstructura input[type=submit] {
	background-color: transparent;
    border: 1px solid <?=$claro?>;
    padding: 10px;
    color: <?=$claro?>;
    width: 100%;
}

#formEstilo input[type=submit]:hover, #formEstructura input[type=submit]:hover {
	background-color: <?=$claro?>;
    border: 1px solid <?=$claro?>;
    padding: 10px;
    color: white;
    width: 100%;

    transition: 0.5s;
}

#formEstilo div {
	margin-bottom: 20px;
}

#color1, #color2, #color3, #color4 {
	width: 50px;						/*Div  de colores para cambiar el aspceto de la web. ancho, alto y borde de 1px*/
	height: 50px;						/*mediante jquery cambiará su borde al estar seleccionado*/
	border: 1px solid gray;
	float: left;
	margin-right: 10px;
	cursor: pointer;				/*Cambia el cursor a mano*/
}

#fondo1, #fondo2, #fondo3, #fondo4 {
	width: 50px;
	height: 50px;					/*Igual que anteriores pero para cambiar el fondo*/
	border: 1px solid gray;
	float: left;
	margin-right: 10px;
	cursor: pointer;
}

#fondo1 img {width: 50px; height: 50px;}		/*Tamño de imagenes en div de cambio de fondo*/
#fondo2 img {width: 50px; height: 50px;}
#fondo3 img {width: 50px; height: 50px;}
#fondo4 img {width: 50px; height: 50px;}

/*--- GALERIA.PHP ---*/

.thumb {
	width: 29%;					/*Contenedor que contiene las miniaturas de las imagenes*/
	float: left;
	background-color: white;
	box-shadow: 0px 0px 5px gray;
	margin: 5px;
	margin-bottom: 30px;
	padding: 10px;
}

.thumb img {
	width: 100%;				/*Imagen*/
	max-height: 200px;
}

@media screen and (max-width: 900px) {
	.thumb {								/*Menor de 900px modifica el tamaño de los contenedores thumb*/
		width: 45%;
		float: left;
		background-color: white;
		box-shadow: 0px 0px 5px gray;
		margin: 5px;
		margin-bottom: 30px;
		padding: 10px;
	}
}

@media screen and (max-width: 730px) {
	.thumb {								/*Menor de 730px modifica el tamaño de los contenedores y de las fotos*/
		width: 100%;
		float: left;
		background-color: white;
		box-shadow: 0px 0px 5px gray;
		margin: 5px;
		margin-bottom: 30px;
		padding: 10px;
	}

	.thumb img {
		width: 100%;
		max-height: none;
	}
}