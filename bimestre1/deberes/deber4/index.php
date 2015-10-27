	<?php 
	echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Pagina deber</title>';
		echo '<link href="css/pagina_deber.css" rel="stylesheet">';
	echo '</head>';
	echo '<body>';
		echo '<div id="header">';
				echo '<div id="pagina_prueba">';
					echo '<a>Pagina de Prueba</a>';
				echo '</div>';
				echo '<div id="login">';
						echo '<input type="text" placeholder="Email">';
						echo '<input type="password" placeholder="Contraseña">';
						echo '<input id="ingresar" type="submit" value="Ingresar" style="border-color:#4AB957">';
						echo '<a href="registro.php"><input id="registrarme" type="submit" value="Registrarme" style="border-color:#4AB957"></a>';
				echo '</div>';//fin div login
		echo '</div>';//fin div header
		echo '<div id="cuerpo">';
			echo '<center>';
				echo '<div id="articulo">';
					echo '<br>';
					echo '<h1 id="titulo1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>';
					echo '<p id="parrafo"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac pharetra metus. 
					Sed hendrerit enim dui, ut mollis lectus finibus scelerisque. In hac habitasse platea dictumst. 
					Cras viverra nisl eget elit feugiat fermentum. Quisque non sapien ut nunc ullamcorper egestas ut sed risus. 
					Nam commodo porttitor dolor, in dignissim enim lacinia et. Donec sit amet faucibus est. 
					Proin imperdiet metus mollis nunc cursus, sed interdum ex sagittis. Vivamus convallis, ligula eu efficitur auctor, 
					sapien dolor lacinia arcu, ac pretium odio nisi et sapien. Etiam neque turpis, laoreet a aliquet nec, 
					pulvinar eget tortor. Quisque imperdiet lorem vestibulum condimentum placerat. Maecenas dignissim euismod 
					scelerisque. Morbi posuere felis in cursus venenatis.</p>';
					echo '<input id="learn_more" type="button" value="Learn more >>">';
					echo '<br>';
				echo '</div>';//fin div articulo
			echo '</center>';		
		echo '</div>';//fin div cuerpo
		echo '<center>';
			echo '<div id="footer">';
				echo '<div class="footer">';
					echo '<h2>Cabecera</h2>';
					echo '<p class="footers">Donec id elit non mi porta gravida at eget metus. 
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. 
					Donec sed odio dui.</p>';
					echo '<input class="details" type="button" value="View details >>">';
				echo '</div>';
				echo '<div class="footer">';
					echo '<h2>Cabecera</h2>';
					echo '<p class="footers">Donec id elit non mi porta gravida at eget metus. 
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. 
					Donec sed odio dui.</p>';
					echo '<input class="details" type="button" value="View details >>">';
				echo '</div>';
				echo '<div class="footer">';
					echo '<h2>Cabecera</h2>';
					echo '<p class="footers">Donec id elit non mi porta gravida at eget metus. 
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. 
					Donec sed odio dui.</p>';
					echo '<input class="details" type="button" value="View details >>">';
				echo '</div>';
			echo '</div>';
		echo '</center>';
	echo '</body>';
	echo '</html>';

	 ?>