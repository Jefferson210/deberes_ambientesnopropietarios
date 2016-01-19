<?php
  $result = "";

  if ( $_POST ) {
    $nombre = htmlentities($_POST['nombre']);
    $email = htmlentities($_POST['email']);
    $celular = htmlentities($_POST['celular']);
    $direccion = htmlentities( $_POST['direccion']);
    $nickname = htmlentities( $_POST['nickname']);
    $password = md5( $_POST['password']);
    $rep_password = md5( $_POST['rep_password']);
    
    $conn = new mysqli('localhost','root', '', 'registroDB');
    if( $conn->connect_error ) 
      $result = "No se puede establece la conexión con la BDD";
    else{
      $q_insert = "INSERT INTO registros(nombre,email,celular,direccion,nickname,password)
                    VALUES ('$nombre', '$email', '$celular', '$direccion','$nickname','$password')";

      $res = $conn->query($q_insert);

      if(!$res){
        $result = 'Existi&oacute; un error al insertar.' . $conn->error;
      } else {
        $result = 'Registro exitoso';
      }
    }
  }
  echo json_encode( $result );
?>