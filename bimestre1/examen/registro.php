<?php require('/p_registro.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<div id="formulario">
			<h1 class="registrate">Registro de Usuarios</h1>
				<hr>
				<div id="datos">
					<form  action="#" method="post">
						<label id="email">Email: </label><input type="text" name="email">
						<br>
						<br>
						<label id="contraseña">Contraseña</label><input type="password" name="password">
						<br>
						<br>
						<label id="contraseña">Verificar Contraseña</label><input type="password" name="verif_password">
						<br>
						<br>
						<input id="registrate" type="submit" value="Regístrate">	
					</form>
				</div>
		</div>
	<center>
</body>
</html>