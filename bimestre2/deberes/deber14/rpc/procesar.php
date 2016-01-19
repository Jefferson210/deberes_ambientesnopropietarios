<?php

$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];
$contrasenia=md5($_POST['contrasenia']);


$conn = new mysqli('localhost', 'root',"", "registro");
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,usuario,contrasenia)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$usuario','$contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}

echo json_encode( $result );


$conn = new mysqli('localhost' , 'root' , '', 'registro');
    if ($conn->connect_error) die($conn ->connect_error);

    $query = "SELECT * FROM usuario";
    $result = $conn ->query($query);
    if(!$result)die($conn ->error);

    echo '<div id="usuarios" style="top: 400px">';
      echo '<table id="tabla_usuarios">';
        echo '<tr class="head">';
        echo '<td><h3><span>Nombre</span></h3></td>
              <td><h3><span>Email</span></h3></td> 
              <td><h3><span>Telefono</span></h3></td>
              <td><h3><span>Direccion</span></h3></td>
              <td><h3><span>Usuario</span></h3></td>
             </tr>';
             $contador=0;
              while($rows =  mysqli_fetch_assoc($result)) 
                  { 
                    echo "<tr>";
                    echo '<td class="editar" id="nombre'.$contador.'"><span>'.$rows["nombre"].'</span></td>';                    
                    echo '<td class="editar" id="email'.$contador.'"><span>'.$rows["email"].'</span></td>';                    
                    echo '<td class="editar" id="telefono'.$contador.'"><span>'.$rows["telefono"].'</span></td>';                    
                    echo '<td class="editar" id="direccion'.$contador.'"><span>'.$rows["direccion"].'</span></td>';                    
                    echo '<td class="editar" id="usuario'.$contador.'"><span>'.$rows["usuario"].'</span></td>';                                      
                    echo "</tr>"; 
                   $contador++;        
                  } 
      echo '</table>';
    echo '</div>';

  $result ->close();
  $conn ->close();

?>