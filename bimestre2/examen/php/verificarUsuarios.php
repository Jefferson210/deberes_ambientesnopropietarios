<?php
	$result="";
	if($_POST){
	  $email = $_POST['email'];
	  $contrasenia = md5($_POST['contrasenia']);

		// verificamos que el estudiante exista en la BDD
		$conexion =new mysqli('localhost','root','','examen2');
		if($conexion-> connect_error) die ($conexion->connect_error);

		$existe_email="SELECT email FROM estudiante WHERE email='$email'";
		$respuesta=$conexion ->query($existe_email);
		$rows = $respuesta ->num_rows;
			if ($rows > 0) {
				// si el estudiante existe en la BDD traemos la contrasena
				$get_password="SELECT contrasena FROM estudiante WHERE email='$email'";
				$resp=$conexion ->query($get_password);
				$row2 = mysqli_fetch_assoc($resp);

				// verificar que la contrasena ingresada coincida con la almacenada en la BDD
				if ($row2['contrasena'] == $contrasenia) {
					// Si las contrasenas coinciden podemos iniciar sesion
						$_SESSION['email'] = $email;
						if(isset( $_SESSION['email'] )) {
							 //http_redirect('matriculacion.php');
							$result='true';
						}
				}	
				else{
					$result= "Usuario o Contraseña Incorrecto";
				}	
			}
	}
	//$msg = (isset($_GET['exito']) ? $_GET['exito'] : '');
	echo json_encode($result); 
?>