<?php
  $result = "";
  if ( $_POST ) {
    $nombre = htmlentities($_POST['nombre']);
    $email = htmlentities($_POST['email']);
    $telefono = htmlentities($_POST['telefono']);
    $direccion = htmlentities( $_POST['direccion']);
    $provincia=$_POST['provincia'];
    $canton=$_POST['canton'];
    $parroquia=$_POST['parroquia'];
    $usuario = htmlentities( $_POST['usuario']);
    $password = md5( $_POST['contrasenia']);
    $rep_password = md5( $_POST['rep_password']);
    
    $conn = new mysqli('localhost','root', '', 'registro');
    if( $conn->connect_error ) 
      $result = "No se puede establece la conexión con la BDD";
    else{
      $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasenia)
                    VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$password')";

      $res = $conn->query($q_insert);

      if(!$res){
        $result = 'Existio un error al insertar.' . $conn->error;
      } else {
        $result = 'Registro exitoso';
      }
    }         
  }//fin IF

  $q_select = "SELECT * FROM usuario";
  $res2 = $conn ->query($q_select);
  if (!$res2) die($conn ->error);
  $rows = $res2 ->num_rows;
  $usuarios=array();

  for ($j = 0 ; $j < $rows ; ++$j){
    $res2 ->data_seek($j);
    $usuarios[] = $res2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }

  $filasUsuarios = "";
  $contador=0;
  foreach ($usuarios as $usuario) {
    $filasUsuarios .=
        '<tr>      
          <td >'.$usuario["id"].'</td>
          <td id="nombre' . $contador . '" >'.$usuario["nombre"].'</td>
          <td id="email' . $contador . '" >'.$usuario["email"].'</td>
          <td id="direccion' . $contador . '" >'.$usuario["direccion"].'</td>
          <td id="provincia' . $contador . '" >'.$usuario["provincia"].'</td>
          <td id="canton' . $contador . '" >'.$usuario["canton"].'</td>
          <td id="parroquia' . $contador . '" >'.$usuario["parroquia"].'</td>
          <td id="telefono' . $contador . '" >'.$usuario["telefono"].'</td>
          <td id="usuario' . $contador . '" >'.$usuario["usuario"].'</td> 
        </tr>';
     }

$arrayJson=array("result" => $result,"filasUsuarios" => $filasUsuarios);  
echo json_encode($arrayJson); 
  
?>