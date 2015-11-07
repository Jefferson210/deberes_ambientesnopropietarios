<?php 
	if($_POST)
		{
			$cod_provincia=$_POST['provincia'];

			require("provincias_cantones_parroquias.php"); 
			foreach ($provincias_cantones_parroquias[$cod_provincia]["cantones"] as $indice2=>$valor2) {
		 				echo '<option value='.$indice2.'>'.$valor2["canton"].'</option>';	 				
		 			}	
		}
		
 ?>