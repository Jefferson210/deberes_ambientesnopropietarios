<?php
	 		if ($_POST) {
 				$cod_provincia=$_POST['provincia'];
 				$cod_canton=$_POST['canton'];

 				require("provincias_cantones_parroquias.php"); 	 			
 				foreach ($provincias_cantones_parroquias[$cod_provincia]['cantones'] as $indice1=>$valor1) {
	 				if ($cod_canton==$indice1) {
	 						echo '<option selected value='.$indice1.'>'. $provincias_cantones_parroquias[$cod_provincia]['cantones'][$cod_canton]['canton'].'</option>';	 	
	 				}
	 				else
		 				{
		 					echo '<option value='.$indice1.'>'.$valor1['canton'].'</option>';	
		 				}		
 				}	 
	 		}
	 		else
		 		{
		 			require("archivos_php/llenar_select_cantones.php");
		 		}
?>