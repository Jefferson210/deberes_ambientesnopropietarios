<?php

	$conn = new mysqli('localhost' , 'root' , '', 'registro');
		if ($conn->connect_error) die($conn ->connect_error);

		$query = "SELECT * FROM usuario";
		$result = $conn ->query($query);
		if(!$result)die($conn ->error);

		// $rows = $result ->num_rows;
		// $usuarios=array();
		// for ($i=0; $i < $rows; ++$rows) { 
		//   $result ->data_seek($i);
		//   $usuarios[]=$result ->fetch_array(MYSQLI_ASSOC);
		// }
		// print_r($usuarios);

		
		echo '<tr>';
		echo '<td>Nombre</td>
    			<td><h3>Email</h3></td> 
    			<td><h3>Telefono</h3></td>
    			<td><h3>Direccion</h3></td>
    			<td><h3>Usuario</h3></td>
    			<td><h3>Contraseña</h3></td>
 				 </tr>';
		while($rows =  mysqli_fetch_assoc($result)) 
			  { 
			    echo "<tr>" 
			           ."<td>".$rows['nombre']."</td>" 
			           ."<td>".$rows['email']."</td>" 
			           ."<td>".$rows['telefono']."</td>" 
			           ."<td>".$rows['direccion']."</td>" 
			           ."<td>".$rows['usuario']."</td>" 
			           ."<td>".$rows['contrasenia']."</td>" 
			           ."</tr>"; 
			  } 

	$result ->close();
	$conn ->close();
?>