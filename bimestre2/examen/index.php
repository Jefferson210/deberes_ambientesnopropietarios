<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio Sesión</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <div id="mensaje" class="alert"></div>
      <div id="error" class="alert"></div>
      <div id="form-registro">
        <form role="form" id="inicioSesion">
          <h2>Inicia sesión para matricularte</h2>
          <div class="form-group">
            <input type="email" name="sesion_email" class="form-control" id="sesion_email" placeholder="Email">
          </div>      
          <div class="form-group">
            <input type="password" name="sesion_contrasenia" class="form-control" id="sesion_contrasenia" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" id="btn-sesion" value="Iniciar Sesión">
          </div>
          <div class="form-group">
            <a id="link_registrarme" href="registro.php ">Registrarme</a>
          </div>
        </form>
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