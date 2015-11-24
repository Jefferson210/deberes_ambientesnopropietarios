<?php require('/p_registro.php'); ?>

<?php 
echo '<html>';
echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<title>Registrate</title>';
	echo '<link href="css/estilo.css" rel="stylesheet">';
echo '</head>';
echo '<body>';
	echo '<center>';
		echo '<div id="formulario">';
			echo '<h1 class="registrate">Registrate</h1>';
			echo '<h1 class="gratis">Es gratis (y lo seguirá siendo).</h1>';
			echo '<br>';
				echo '<div id="datos">';
					echo '<form  action="#" method="post">';
					if(isset($error) && $error != '' ): 
					echo $error;
   					endif;
						echo '<label id="nombre">Nombre: </label><input type="text" name="nombres">';	
						echo '<label id="apellido">Apellidos: </label><input type="text" name="apellidos">';
						echo '<label id="email">Tu Email: </label><input type="text" name="email">';
						echo '<label id="repite_email">Escribe de nuevo<br>el correo</label><input type="text" name="rep_email">';
						echo '<label id="electronico">electrónico:</label><br>';
						echo '<label id="contraseña">Contraseña<br>nueva:</label><input type="password" name="password"><br>';
						echo '<label id="sexo">Sexo:</label>
							  <select name="genero" id="select">
								  <option selected>Selecciona el sexo</option>
								  <option value="m">Masculino</option>
								  <option value="f">Femenino</option>
							  </select><br>';
						echo '<label id="nacimineto">Fecha de<br>nacimineto:</label>';
						include("fecha_nacimiento.php");
						echo '<br>';
						echo '<a id="pregunta" href="index.php ">¿Por qué debo proporcionar esta información?</a>';	
						echo '<input id="registrate" type="submit" value="Regístrate">';		
					echo '</form>';
					echo '<hr>';
				echo '</div>';

		echo '</div>';
	echo '<center>';
echo '</body>';
echo '</html>';

 ?>