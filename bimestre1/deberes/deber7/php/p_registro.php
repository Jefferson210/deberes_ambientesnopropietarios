<?php 

	$error = '';
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

		if($email !== $conf_email){
   		 $error .= htmlentities('Los emails no coinciden');
 		}

		 if($error == ''){
      $conn = new mysqli('localhost' , 'root' , '', 'sistema2');
      if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);

      $fecha =$anio.'/'.$mes .'/'. $dia ;
      $query = "INSERT INTO usuario 
                      (nombres, 
                        apellidos, 
                        email, 
                        password,
                        genero,
                        fecha
                        )
                    VALUES (
                      '$nom',
                      '$ape',
                     	'$email',
                     	'$contrasena',
                     	'$genero',
                     	'$fecha'
                      )";
      $result = $conn ->query($query);
      if (!$result) {
        $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
      }
      
      if($error == '') {
        http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
      }
	 }
}

