<?php
	if(isset($_GET['e'])) {
		if($_GET['e'] == 0) {
			echo "
				<div id='alerta'>Algo ha fallado. Vuelve a intentarlo y asegurate de completar todos los campos.</div>
			";
		}
		elseif($_GET['e'] == 1) {
			echo "
				<div id='exito'>Ha publicado un nuevo post en el blog. Puede verlo pulsando <a href='index.php'>aquí</a>.</div>
			";
		}
	}
?>