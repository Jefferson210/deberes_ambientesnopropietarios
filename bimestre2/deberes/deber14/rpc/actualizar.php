<?php

$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];

$conn = new mysqli('localhost', 'root',"", "registro");
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_update = "UPDATE usuario SET nombre='$nombre', email='$email',telefono='$telefono',direccion='$direccion'            ,usuario='$usuario' WHERE usuario='$usuario' ";
                  

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Error al actualizar.' . $conn->error;
    } else {
      $result = 'Actualizado con exito.';
    }
  }
}

echo json_encode( $result );

?>