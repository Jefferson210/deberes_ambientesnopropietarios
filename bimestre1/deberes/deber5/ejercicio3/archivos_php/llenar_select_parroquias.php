<?php 
	if($_POST)
	{
		$cod_provincia=$_POST['provincia'];
		$cod_canton=$_POST['canton'];

		if ($cod_canton=="Seleccione...") {
			//no realiza ninguna accion
		}
		else
		{
			require("provincias_cantones_parroquias.php"); 
			foreach ($provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]["parroquias"] as $indice2=>$valor2) {
		 				echo '<option value='.$indice2.'>'.$valor2.'</option>';	 				
		 			}	
			}	
	}
 ?>