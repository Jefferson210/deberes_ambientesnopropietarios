<?php 
echo '<html>';
echo '<head>';
	echo'<title>Conversor de Monedas</title>';
	echo '<meta charset="utf-8">';
	echo '<link href="css/estilo.css" rel="stylesheet">';
echo '</head>';
echo '<body>';
	echo '<h2>Conversor de Monedas</h2>'; 
	echo '<center>';
		echo '<div id="div_general">';
			echo '<form  action="#" method="post" >';
				echo '<div id="valor">';
					echo '<label>Valor en USD: </label><input type="text" name="valor">';
				echo '</div>';
				echo '<div id="convertir_a">';
					echo '<label>Convertir a: </label>';
					echo '<select name="convertir_a">';
						echo '<option selected>Seleccione...</option>';
						echo '<option value="euros">Euros</option>';
						echo '<option value="pesos">Pesos Colombianos</option>';
					echo '</select>';
				echo '</div>';
				echo '<br>';
					echo '<div id="boton">';
					echo '<input type="submit" value="Convertir">';
					echo '</div>';
			echo '</form>';
		echo '</div>';
			
			echo '<div id="respuesta">';
				echo '<div id="require">';
	  			require ("conversor.php");	
	  		echo '</div>';
			echo '</div>';
	echo '<center>';
echo '</body>';
echo '</html>';


 ?>