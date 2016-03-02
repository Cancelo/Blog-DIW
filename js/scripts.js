window.addEventListener('load', inicio, false);

function inicio() {
	document.getElementById("abrirMenu").addEventListener('click', mostrar, false);
	document.getElementById("cerrarMenu").addEventListener('click', cerrar, false);

	document.getElementById("seleccion1").addEventListener('click', mostrarSelec1, false);	
	document.getElementById("seleccion2").addEventListener('click', mostrarSelec2, false);

	document.getElementById("cerrarSeleccion1").addEventListener('click', cerrarSelec1, false);
	document.getElementById("cerrarSeleccion2").addEventListener('click', cerrarSelec2, false);

	document.getElementById("color1").addEventListener('click', cambiaColor, false);
}

function cambiaColor() {
	document.getElementById("cabecera").style.width="500px";
}

function mostrar() {
	document.getElementById("menu").style.top="0px";
}

function cerrar() {
	document.getElementById("menu").style.top="-800px";
}

function mostrarSelec1() {
	document.getElementById("selec1Oculto").style.visibility="visible";
}

function cerrarSelec1() {
	document.getElementById("selec1Oculto").style.visibility="hidden";
}

function mostrarSelec2() {
	document.getElementById("selec2Oculto").style.visibility="visible";
}

function cerrarSelec2() {
	document.getElementById("selec2Oculto").style.visibility="hidden";
}