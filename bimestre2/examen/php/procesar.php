<?php
  $result = "";
  if ( $_POST ) {
    $nombre = htmlentities($_POST['nombre']);
    $apellido = htmlentities($_POST['apellido']);
    $email = htmlentities($_POST['email']);
    $password = md5( $_POST['contrasenia']);
    $rep_password = md5( $_POST['rep_password']);
    
    $conn = new mysqli('localhost','root', '', 'examen2');
    if( $conn->connect_error ) 
      $result = "No se puede establece la conexión con la BDD";
    else{
      $query_insert = "INSERT INTO estudiante(nombres,apellidos,email,contrasena)
                    VALUES ('$nombre','$apellido', '$email','$password')";

      $respuesta = $conn->query($query_insert);

      if(!$respuesta){
        $result = 'Existio un error al insertar.' . $conn->error;
      } else {
        $result = 'Registro exitoso';
      }
    }         
  }//fin IF

echo json_encode($result); 
?>