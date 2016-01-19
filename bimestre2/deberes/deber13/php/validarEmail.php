<?php
    
    if ($_POST){
        
        $email=$_POST['email'];

        $conexion =new mysqli('localhost','root','','registroDB');
        if($conexion-> connect_error) die ($conexion->connect_error);

        $existe_email="SELECT email FROM registros WHERE email='$email'";
        $respuesta=$conexion ->query($existe_email);
        $rows = $respuesta ->num_rows;
        if($rows > 0)
            {
                echo "false";  
            }
        else
            {
                echo "true"; 
            }

    }
    else
    {
        echo "No hay datos recibidos"; 
    }

?>


  