<?php
  $result="";
  if($_POST){
    $valor=$_POST['valor'];
    $campo=$_POST['campo'];
    $id=$_POST['id'];

    $conn = new mysqli('localhost', 'root',"", "registro");
    if( $conn->connect_error ) 
      $result = "No se puede establece la conexión con la BDD";
    else{
      $q_update = "update usuario set ".$_POST["campo"]."='".$_POST["valor"]."' where id='".intval($_POST["id"])."' limit 1";
      $res = $conn->query($q_update);

      if(!$res){
        $result = 'Existio un error al actualizar los datos.' . $conn->error;
      } else {
        $result = 'Los datos han sido actualizados con exito.';
      }
    }

    
    $query = "SELECT * FROM usuario";
    $result2 = $conn ->query($query);
    if (!$result2) die($conn ->error);
    $rows = $result2 ->num_rows;
    $usuarios=array();

    for ($j = 0 ; $j < $rows ; ++$j){
      $result2 ->data_seek($j);
      $usuarios[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
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
     //$contador++;
    }

    $arrayJson=array("result" => $result,"filasUsuarios" => $filasUsuarios);  
    echo json_encode($arrayJson); 
  }
?>