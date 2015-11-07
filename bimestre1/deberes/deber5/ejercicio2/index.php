<html>
<head>
	<title>Provincias,Cantones y Parroquias</title>
	<meta charset="utf-8">
</head>
<body>
	 <form action="#" method="post">
	 	<select name="provincia" onchage="submit"><!--onchange me permite regresar a la misma pagina al presionar el boton -->
	 		<?php require("archivos_php/provincias.php"); ?>
	 	</select>

	 	<select name="canton" onchange="submit"><!--onchange me permite regresar a la misma pagina al presionar el boton -->
	 		<option selected>Seleccione...</option>
	 		<?php require("archivos_php/cantones.php"); ?>
	 	</select>

	 	<select name="parroquias">
	 		<option selected>Seleccione...</option>
	 		<?php require("archivos_php/parroquias.php"); ?>
	 	</select>

	 	<input type="submit" value="Enviar">
	 </form>
</body>
</html>

