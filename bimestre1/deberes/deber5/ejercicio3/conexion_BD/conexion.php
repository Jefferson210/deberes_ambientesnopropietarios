<?php 
	if ($_POST) {
		//recibimos el codigo de la provincia,canton y parroquia.
		$cod_provincia=$_POST['provincia'];
		$cod_canton=$_POST['canton'];
		$cod_parroquia=$_POST['parroquias'];

			//comprobamos que los esten selecionados los tres selects
			if ($cod_provincia=="Seleccione..." || $cod_canton=="Seleccione..." || $cod_parroquia=="Seleccione...") {
				//no realiza el guardado en la BD
				//no realiza nada
			}
			else
			{	
				require("provincias_cantones_parroquias.php"); 
				//rescatamos el nombre de la provincia,canton y parroquia.
				$nom_provincia=$provincias_cantones_parroquias[$cod_provincia]['provincia'];
				$nom_canton=$provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]['canton'];
				$nom_parroquia=$provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]['parroquias'][$cod_parroquia];

				//abrimos la conexion
				$conexion =new mysqli('localhost','root','','s5e3');
				if($conexion-> connect_error) die ($conexion->connect_error);

				//insertamos los datos
				$query="INSERT INTO datos(
										cod_provincia,
										nom_provincia,
										cod_canton,
										nom_canton,
										cod_parroquia,
										nom_parroquia)
						VALUES (
							'$cod_provincia',
							'$nom_provincia',
							'$cod_canton',
							'$nom_canton',
							'$cod_parroquia',
							'$nom_parroquia')";
				$result = $conexion ->query($query);
				echo '<h3>Guardado con exito.</h3>';
				if (!$result) die($conexion ->error);
			}
		}
 ?>