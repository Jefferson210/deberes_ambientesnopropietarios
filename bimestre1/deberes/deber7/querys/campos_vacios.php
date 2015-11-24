<?php 
echo '<html>';
echo '<head>';
	echo '<title>Este Email ya existe</title>';
	echo '<meta charset="utf-8">';
	echo '<link href="css/errores.css" rel="stylesheet">';
echo '</head>';
echo '<body>';
	echo '<center>';
		echo '<div id="formulario">';
			echo '<h1 class="registrate">Registrate</h1>';
			echo '<h1 class="gratis">Es gratis (y lo seguirá siendo).</h1>';
			echo '<br>';
				echo '<div id="datos">';
					echo '<form  action="registro.php" method="post">';
						   echo '<h1>Debes llenar todos los campos</h1>';
						echo '<input id="regresar" type="submit" value="Regresar">';
					echo '</form>';
					echo '<hr>';
				echo '</div>';
		echo '</div>';
	echo '</center>';
echo '</body>';
echo '</html>';	
 ?>

