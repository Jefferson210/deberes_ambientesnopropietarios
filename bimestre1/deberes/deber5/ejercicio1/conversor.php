<?php 

if ($_POST) {
	$valor=$_POST['valor'];
	$convertir_a=$_POST['convertir_a'];

	if (empty($valor)) {
		echo 'Campo vacio';
	}
	else
	{
		if ($convertir_a == "euros") {
		$usd_euros=$valor * 0.908;
		echo $valor . " USD equivale a " . $usd_euros . "euros";
		}else
			{
			$usd_pesos=$valor * 2.897;
			echo $valor . " USD equivale a " . $usd_pesos . "pesos Colombianos";
			}

	}

	
}


 ?>