<?php 

echo '<select  class="fecha_nac" name="dia">';
	echo '<option selected>Día:</option>';
		for ($i=1; $i<=31 ; $i++) { 
			echo '<option value='.$i.'>'.$i.'</option>';	
		}	
echo '</select>';
	
$meses = array(
	"1"=>"enero",
	"2"=>"febrero",
	"3"=>"marzo",
	"4"=>"abril",
	"5"=>"mayo",
	"6"=>"junio",
	"7"=>"julio",
	"8"=>"agosto",
	"9"=>"septiembre",
	"10"=>"octubre",
	"11"=>"noviembre",
	"12"=>"diciembre");

echo '<select  class="fecha_nac" name="mes">';
	echo '<option selected>Mes:</option>';
		for ($i=1; $i<=12 ; $i++) { 
			echo '<option value='.$i.'>'.$meses[$i].'</option>';	
		}	
echo '</select>';

echo '<select class="fecha_nac" name="anio">';
	echo '<option selected>Año:</option>';
		for ($j=2015; $j>=1905 ; $j--) { 
			echo '<option value='.$j.'>'.$j.'</option>';	
	}
echo '</select>';	
	?>