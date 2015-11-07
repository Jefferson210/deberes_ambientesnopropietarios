<?php
	if ($_POST) {
		$cod_provincia=$_POST['provincia'];
		$cod_canton=$_POST['canton'];
		$cod_parroquia=$_POST['parroquias'];
		
		require("provincias_cantones_parroquias.php"); 	 			
		foreach ($provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]["parroquias"] as $indice1=>$valor1) {
			if ($cod_parroquia==$indice1) {
				echo '<option selected value='.$indice1.'>'. $provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]['parroquias'][$indice1].'</option>';	 	
			}
			else
			{
				echo '<option value='.$indice1.'>'.$valor1.'</option>';	
			}		
		}	 
	}
	else
		{
		require("archivos_php/llenar_select_parroquias.php");
		}
?>