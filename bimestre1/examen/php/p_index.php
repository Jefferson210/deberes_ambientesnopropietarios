<?php

if($_POST){
  $email = $_POST['email'];
  $pass = md5($_POST['password']);

  // verificamos que el campo contrasena no este vacio
  if($email== "" || $pass== "")
		{
			echo '<h2>Ingrese usuario y contraseña</h2>';	
		}
			else
				{	
					// verificamos que el usuario exista en la BDD
					$conexion =new mysqli('localhost','root','','bdd');
					if($conexion-> connect_error) die ($conexion->connect_error);

					$existe_email="SELECT email FROM usuario WHERE email='$email'";
					$respuesta=$conexion ->query($existe_email);
					$rows = $respuesta ->num_rows;
						if ($rows > 0) {
							// si el usuario existe en la BDD traemos la contrasena
							$get_pass="SELECT password FROM usuario WHERE email='$email'";
							$resp=$conexion ->query($get_pass);
							$row2 = mysqli_fetch_assoc($resp);
							//echo $row2['password'];
							//echo "in pass: ".$pass;

							// verificar que la contrasena ingresada coincida con la almacenada en la BDD
							if ($row2['password'] == $pass) {
								// Si las contrasenas coinciden podemos iniciar sesion
									$_SESSION['email'] = $email;
									if(isset( $_SESSION['email'] )) {
 									 http_redirect('inicio.php');
									}
							}	
							else{
								echo '<h2>Usuario o Contraseña Incorrecto</h2>';
							}	
						}
						
				}	


}

$msg = (isset($_GET['exito']) ? $_GET['exito'] : '');