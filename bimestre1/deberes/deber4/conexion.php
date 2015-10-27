<?php 

	if ($_POST) {
		$nom=$_POST['nombres'];
		$ape=$_POST['apellidos'];
		$email=$_POST['email'];
		$conf_email=$_POST['rep_email'];
		$contrasena=md5($_POST['password']);
		$genero=$_POST['genero'];
		$dia=$_POST['dia'];
		$mes=$_POST['mes'];
		$anio=$_POST['anio'];

		if($nom== "" || $ape== "" || $email== "" || $conf_email== "" || $contrasena== "" || $genero== "Selecciona el sexo" || $dia== "Día:" || $mes== "Mes:" || $anio== "Año:")
		{
			//echo "Rellena todos los campos";
			require("querys/campos_vacios.php");
		}
			else{
					if($email !== $conf_email){
					require ("querys/confirmar_email.php");
					}
						else
							{	
								$conexion =new mysqli('localhost','root','','sistema');
								if($conexion-> connect_error) die ($conexion->connect_error);

								$existe_email="SELECT email FROM usuarios WHERE email='$email'";
								$respuesta=$conexion ->query($existe_email);
								$rows = $respuesta ->num_rows;
									if ($rows > 0) {
										require ("querys/existe_email.php");
									}
										else
											{
												$conexion =new mysqli('localhost','root','','sistema');
												if($conexion-> connect_error) die ($conexion->connect_error);

													$fecha =$anio.'/'.$mes .'/'. $dia ;
													$query = "INSERT INTO usuarios 
												                  (nombres, 
												                   apellidos, 
												                   email, 
												                   contrasena,
												                   genero, 
												                   fecha)
												                VALUES (
												                  	'$nom',
												                  	'$ape',
												                  	'$email',
												                  	'$contrasena',
												                  	'$genero',
												                  	'$fecha')";
													  $result = $conexion ->query($query);
													  if (!$result) die($conexion ->error);
													  require ("index_salir.php");
											}
							}
			}	
	}

?>