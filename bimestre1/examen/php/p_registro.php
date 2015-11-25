<?php

$error = '';

if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['password']);
  $verificar_contrasena = md5($_POST['verif_password']);

  if ($email=="" || $contrasena=="" || $verificar_contrasena=="") {
    echo '<h2>Ingrese sus datos</h2>';
  }
  else
  {
      if($contrasena !== $verificar_contrasena){
        $error .= htmlentities('Las contraseñas no coinciden');
        echo '<h2>Las contraseñas no coinciden</h2>';
      }

        if($error == ''){
          $conn = new mysqli('localhost' , 'root' , '', 'bdd');
          if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);

          $query = "INSERT INTO usuario 
                          (
                            email, 
                            password)
                        VALUES (
                          '$email',
                          '$contrasena'
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
}