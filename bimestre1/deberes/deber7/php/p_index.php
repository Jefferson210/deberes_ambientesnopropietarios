<?php

if($_POST){
  $email = $_POST['email'];
  $pass = md5($_POST['password']);

   // verificar si el campo no está vacio
  // verificamos que el campo contrasena no este vacio
  if($email== "" || $pass== "")
		{
			echo "Rellena todos los campos";	
		}
			else
				{	
					// verificamos que el usuario exista en la BDD
					$conexion =new mysqli('localhost','root','','sistema');
					if($conexion-> connect_error) die ($conexion->connect_error);

					$existe_email="SELECT email FROM usuario WHERE email='$email'";
					$respuesta=$conexion ->query($existe_email);
					$rows = $respuesta ->num_rows;
						if ($rows > 0) {
							// si el usuario existe en la BDD traemos la contrasena
							$get_pass="SELECT contrasena FROM usuario WHERE email='$email'";
							$resp=$conexion ->query($get_pass);
							$row2 = mysqli_fetch_assoc($resp);
							//echo $row2['contrasena'];
							//echo "in pass: ".$pass;

							// verificar que la contrasena ingresada coincida con la almacenada en la BDD
							if ($row2['contrasena'] == $pass) {
								// Si las contrasenas coinciden podemos iniciar sesion
									$_SESSION['email'] = $email;
									if(isset( $_SESSION['email'] )) {
 									 http_redirect('inicio.php');
							}
						}	
						else{
							echo "las contrasenas no coiciden";
						}	
				}
}	


}

$msg = (isset($_GET['exito']) ? $_GET['exito'] : '');