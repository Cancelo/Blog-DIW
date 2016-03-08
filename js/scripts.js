$(document).ready(function() {
	$("#logo").click(function(evento) {		// Te lleva al index al ahcer click en el logo
		window.location ="index.php";
	});

	$("#abrirMenu").click(function(evento) {	// Cambia top de menu y hace que aparezca
		$("#menu").css("top", "0px");
	});

	$("#cerrarMenu").click(function(evento) {		// Cierra menu. Cambia top a -800, por encima de la partre visible de la web
		$("#menu").css("top", "-800px");
	});
	
	$("#seleccion1").click(function(evento) {				// Muestra o cierra seleccion1, 2 o 3. Cambia visibility a visible
		$("#selec1Oculto").css("visibility", "visible");	// o a hidden.
	});

	$("#cerrarSeleccion1").click(function(evento) {
		$("#selec1Oculto").css("visibility", "hidden");
	});

	$("#seleccion2").click(function(evento) {
		$("#selec2Oculto").css("visibility", "visible");
	});

	$("#cerrarSeleccion2").click(function(evento) {
		$("#selec2Oculto").css("visibility", "hidden");
	});

	$("#seleccion3").click(function(evento) {
		$("#selec3Oculto").css("visibility", "visible");
	});

	$("#cerrarSeleccion3").click(function(evento) {
		$("#selec3Oculto").css("visibility", "hidden");
	});

	$("#color1").click(function(evento) {					// Al hacer click en color1, cambia su borde y restablece a valor inicial los otros div
		$("#color1").css("border", "2px dashed black");		// Esto se repite dependiendo el contenedor puelsado
		$("#color2").css("border", "1px solid gray");		// Es igual para divs de colores que divs de fondos
		$("#color3").css("border", "1px solid gray");
		$("#color4").css("border", "1px solid gray");
		document.formEstilo.colorI.value = "color1";			// Establece en el campo oculto del formulario el valor correspondiente al color
	});															// seleccionado. Se repite para los 4 colores y 4 fondos diponibles

	$("#color2").click(function(evento) {
		$("#color1").css("border", "1px solid gray");
		$("#color2").css("border", "2px dashed black");
		$("#color3").css("border", "1px solid gray");
		$("#color4").css("border", "1px solid gray");
		document.formEstilo.colorI.value = "color2";
	});

	$("#color3").click(function(evento) {
		$("#color1").css("border", "1px solid gray");
		$("#color2").css("border", "1px solid gray");
		$("#color3").css("border", "2px dashed black");
		$("#color4").css("border", "1px solid gray");
		document.formEstilo.colorI.value = "color3";
	});

	$("#color4").click(function(evento) {
		$("#color1").css("border", "1px solid gray");
		$("#color2").css("border", "1px solid gray");
		$("#color3").css("border", "1px solid gray");
		$("#color4").css("border", "2px dashed black");
		document.formEstilo.colorI.value = "color4";
	});

	$("#fondo1").click(function(evento) {
		$("#fondo1").css("border", "2px dashed black");
		$("#fondo2").css("border", "1px solid gray");
		$("#fondo3").css("border", "1px solid gray");
		$("#fondo4").css("border", "1px solid gray");
		document.formEstilo.fondo.value = "bg1.png";
	});

	$("#fondo2").click(function(evento) {
		$("#fondo1").css("border", "1px solid gray");
		$("#fondo2").css("border", "2px dashed black");
		$("#fondo3").css("border", "1px solid gray");
		$("#fondo4").css("border", "1px solid gray");
		document.formEstilo.fondo.value = "bg2.png";
	});

	$("#fondo3").click(function(evento) {
		$("#fondo1").css("border", "1px solid gray");
		$("#fondo2").css("border", "1px solid gray");
		$("#fondo3").css("border", "2px dashed black");
		$("#fondo4").css("border", "1px solid gray");
		document.formEstilo.fondo.value = "bg3.png";
	});

	$("#fondo4").click(function(evento) {
		$("#fondo1").css("border", "1px solid gray");
		$("#fondo2").css("border", "1px solid gray");
		$("#fondo3").css("border", "1px solid gray");
		$("#fondo4").css("border", "2px dashed black");
		document.formEstilo.fondo.value = "bg4.png";
	});

})