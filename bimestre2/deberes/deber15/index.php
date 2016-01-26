<?php
  //LLENAR SELECT PROVINCIAS
  $conn = new mysqli('localhost' , 'root' , '', 'registro');
  if ($conn->connect_error) die($conn ->connect_error);

  $query = "SELECT * FROM provincias";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);

  $rows = $result ->num_rows;
  $provincias = array();
  for ($j = 0 ; $j < $rows ; ++$j){
    $result ->data_seek($j);
    $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  //LLENAR TABLA DE USUARIOS

  $query2 = "SELECT * FROM usuario";
  $result2 = $conn ->query($query2);
  if (!$result2) die($conn ->error);
  $rows2 = $result2 ->num_rows;
  $usuarios=array();

  for ($j = 0 ; $j < $rows2 ; ++$j){
    $result2 ->data_seek($j);
    $usuarios[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  //print_r($usuarios);


  $result ->close();
  $conn ->close();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <div id="mensaje" class="alert"></div>
      <div id="error" class="alert"></div>
      <div id="form-registro">
        <form role="form" id="registro">
          <div class="form-group">
            <h2>Formulario de Registro</h2>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electronico">
          </div>
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección">
          </div>
          <div class="form-group"> 
            <label for="provincia">Provincia</label>
            <select id="txtprovincia" name="provincia">
              <option value="">Seleccione...</option>
              <?php
                foreach($provincias as $pr){
                  echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="canton">Canton</label>
            <select name="canton" id="txtcanton">
              <option value="">Seleccione...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="parroquia">Parroquia</label>
            <select name="parroquia" id="txtparroquia">
              <option value="">Seleccione...</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <input type="password" name="contrasenia" class="form-control" id="contrasenia" placeholder="Contraseña Nueva">
          </div>
          <div class="form-group">
            <input type="password" name="rep_password" class="form-control" id="rep_password" placeholder="Verificar Contraseña">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" id="btn-enviar">
          </div>
        </form>
      </div>
      <div id="msgUpdate" class="alert"></div>
      <div class="form-group">
        <input type="text" id="buscar" placeholder="Buscar">
      </div>
      <div id="tabla">
        <table id="users_table" class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Direccion</th>
              <th>Provincia</th>
              <th>Catón</th>
              <th>Parroquia</th>
              <th>Telefono</th>
              <th>Usuario</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $contador = 0;
              foreach ($usuarios as $usuario) {
                echo '<tr>';
                echo '<td class="id" data-campo="id"><span>'. $usuario['id'] .'</span></td>';
                echo '<td id="nombre' . $contador . '" data-campo="nombre" class="editable"><span>'. $usuario['nombre'] .'</span></td>';
                echo '<td id="email' . $contador . '" data-campo="email" class="editable"><span>'. $usuario['email'] .'</span></td>';
                echo '<td id="direccion' . $contador . '" data-campo="direccion" class="editable"><span>'. $usuario['direccion'] .'</span></td>';
                echo '<td id="provincia' . $contador . '" data-campo="provincia" class="editable"><span> '. $usuario['provincia'] .'</span> </td>';
                echo '<td id="canton' . $contador . '" data-campo="canton" class="editable"><span> '. $usuario['canton'] .'</span> </td>';
                echo '<td id="parroquia' . $contador . '" data-campo="parroquia" class="editable"><span> '. $usuario['parroquia'] .'</span> </td>';
                 echo '<td id="telefono' . $contador . '" data-campo="telefono" class="editable"> <span>'. $usuario['telefono'] .'</span> </td>';
                echo '<td id="usuario' . $contador . '" data-campo="usuario" class="editable"> <span>'. $usuario['usuario'] .'</span> </td>';
                echo '</tr>';
                $contador++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    
    
    <!--SCRIPTS-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <scripttype="text/javascript"  src="js/additional-methods.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery-validate.bootstrap-tooltip.min.js"></script>

  </body>
</html>