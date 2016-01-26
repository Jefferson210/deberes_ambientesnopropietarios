<?php 
  
  $result="";
  $buscar=$_POST['query'];
  $conn = new mysqli('localhost', 'root',"", "registro");
  $sql ="SELECT * FROM usuario WHERE nombre LIKE '%".$buscar."%' ";
  $res = $conn->query($sql);
  $rows = $res->num_rows;

  if(!$res){
    $result = 'Existio un error al Consultar en la BD.' . $conn->error;
  }else {
      $result = 'Consulta realizada con exito.';
  }

  $filaConsultada = "";
  if($rows == 0){
    $filaConsultada.='<td> No se han encontrado resultados </td>';
   }
  else{
    for ($j = 0 ; $j < $rows ; ++$j){
      $res ->data_seek($j);
      $consulta[] = $res ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
    }
  }

  $contador=0;
  foreach ($consulta as $busqueda) {
    $filaConsultada .= 
        '<tr>      
          <td >'.$busqueda["id"].'</td>
          <td id="nombre' . $contador . '" >'.$busqueda["nombre"].'</td>
          <td id="email' . $contador . '" >'.$busqueda["email"].'</td>
          <td id="direccion' . $contador . '" >'.$busqueda["direccion"].'</td>
          <td id="provincia' . $contador . '" >'.$busqueda["provincia"].'</td>
          <td id="canton' . $contador . '" >'.$busqueda["canton"].'</td>
          <td id="parroquia' . $contador . '" >'.$busqueda["parroquia"].'</td>
          <td id="telefono' . $contador . '" >'.$busqueda["telefono"].'</td>
          <td id="usuario' . $contador . '" >'.$busqueda["usuario"].'</td>  
        </tr>';
   //$contador++;
  }
  $arrayJson=array("result" => $result,"filaConsultada" => $filaConsultada);  
  echo json_encode($arrayJson);  
?>