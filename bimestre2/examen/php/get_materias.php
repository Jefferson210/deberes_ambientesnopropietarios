<?php

  if($_POST){

    $nivel = $_POST['nivel'];

    $conn = new mysqli('localhost' , 'root' , '', 'examen2');
        
        if ($conn->connect_error) die($conn ->connect_error);

        $query = "SELECT * FROM materia WHERE id_nivel = '$nivel'";
        
        $result = $conn ->query($query);
        
        if (!$result) die($conn ->error);

        $rows = $result ->num_rows;
        
        $materias = array();

        for ($j = 0 ; $j < $rows ; ++$j){
          $result ->data_seek($j); //buscar fila $j
          $materias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
        }
    // print_r($materias);

    $options = "";
    foreach ($materias as $materia) {
      $options .= '<td class="checkbox"><label><input type="checkbox" id="materia" name="materia" value="'.$materia['id_materia'].'">'. $materia['nombre'] .'</input></label></td>'; 
    }
    echo $options;
    
    $result ->close();
    $conn ->close();

  } else {
    echo "No se han recibido datos";
  }  

   
?>