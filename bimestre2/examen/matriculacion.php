<?php
  //LLENAR SELECT PROVINCIAS
  $conn = new mysqli('localhost' , 'root' , '', 'examen2');
  if ($conn->connect_error) die($conn ->connect_error);

  $query = "SELECT * FROM nivel";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);

  $rows = $result ->num_rows;
  $niveles = array();
  for ($j = 0 ; $j < $rows ; ++$j){
    $result ->data_seek($j);
    $niveles[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  
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
    <title>Registro de materias</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <div id="mensaje" class="alert alert-success">
        <?php
          echo '<h3>Bienvenido '.$_SESSION['email'].',  en esta ventana puedes matricularte.</h3>';
        ?>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group"> 
            <select class="form-control" id="txtnivel" name="niveles">
              <option value="">Selecciona el nivel:</option>
              <?php
                foreach($niveles as $nivel){
                  echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
                }
              ?>
            </select>
          </div>
        </div> 
        <div class="col-md-8">
          <div class="form-group"> 
            <div class="table-responsive">
              <table id="materias" class="table">
                <thead>
                  <tr>
                    <th>Lista de materias disponobles en <span></span> nivel</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> 
      </div>  
      <div class="row">
        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-lg" id="reg_materias" value="Registrar Materias">
        </div>
        <div class="form-group">
          <a href="./php/cerrar_sesion.php">Cerrar Sesión</a>
        </div>
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