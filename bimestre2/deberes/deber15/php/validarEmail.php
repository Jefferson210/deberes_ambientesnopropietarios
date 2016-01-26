<?php
    
    if ($_POST){
        
        $email=$_POST['email'];

        $conexion =new mysqli('localhost','root','','registro');
        if($conexion-> connect_error) die ($conexion->connect_error);

        $existe_email="SELECT email FROM usuario WHERE email='$email'";
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


  