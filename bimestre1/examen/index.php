<?php
include('/p_index.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<div id="inicio_sesion">
			<h1 class="registrate">Inicio de Sesion</h1>
				<hr>
				<div id="datos">
					<form  action="#" method="post">
						<label id="email">Email: </label><input type="text" name="email">
						<br>
						<br>
						<label id="contraseña">Contraseña</label><input type="password" name="password">
						<br>
						<br>
						<input id="registrate" type="submit" value="Inicio Sesion">	
						<a id="registrarme" href="registro.php ">Registrarme</a>	
					</form>
				</div>
		</div>
	<center>
</body>
</html>