<?php
 		if ($_POST) {//si se recarga la pagina
 			$cod_provincia=$_POST['provincia'];//Recibo la variable que envie al presionar la primera vez el boton Enviar
 			require("provincias_cantones_parroquias.php"); 	 			
 			foreach ($provincias_cantones_parroquias as $indice1=>$valor1) {
 				if ($cod_provincia==$indice1) {//si la variable recibida por POST aes igual al valor de un indice dentro del array
 					//seleccionado el valor que escogi en el select
 					echo '<option selected value='.$indice1.'>'. $provincias_cantones_parroquias[$cod_provincia]['provincia'].'</option>';	 	
 				}
 				else
 				{
 					//se sigue llenando el select con el resto de provincias
 					echo '<option value='.$indice1.'>'.$valor1["provincia"].'</option>';	
 				}		
 			}	 
 		}
 		else
 		{
 			//esto es si la pagina no ha sido recargada la pagina, es decir la primera vez que se ejecuta.
 			echo '<option selected>Seleccione...</option>';
 			require("provincias_cantones_parroquias.php"); 
 			foreach ($provincias_cantones_parroquias as $indice1=>$valor1) {
 				echo '<option value='.$indice1.'>'.$valor1["provincia"].'</option>';
 			}

 		}
	 			
	 	//EL FUNCIONAMIENTO ES EL MISMO PARA LOS DOS ARCHIVOS SIGUIENTES: 
	 	//cantones.php y parroquias.php
?>