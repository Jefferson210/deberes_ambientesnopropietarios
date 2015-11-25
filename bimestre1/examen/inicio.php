<?php require('/p_inicio.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<div id="registroClientes">
			<h1 class="registrate">Registro Clientes</h1>
				<hr>
				<div id="datosClientes">
					<form  action="#" method="post">
					<div>
						<label id="nombre">Nombre: </label>
						<input type="text" name="nombre">
					</div>

					<div>
						<label id="apellidos">Apellidos: </label>
						<input type="text" name="apellido">
					</div>

					<div>
						<label id="nombre">Edad: </label>
							<select name="edad" id="select">
								  <option selected>Seleccione...</option>
								  <option value="menor 20 años">Menos de 20 años</option>
								  <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
								  <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
								  <option value="Mas de 60 años">Mas de 60 años</option>
							  </select><br>
					</div>

					<div>
						<label id="peso">Peso: </label>
						<input type="text" name="peso">
					</div>

					<div>
					    <div><label>Género</label></div>
					    <label for="genero_m">Hombre </label>
					    <input type="radio" id="genero_m" name="genero" value="m">
					    <label for="genero_f">Mujer </label>
					    <input type="radio" id="genero_f" name="genero" value="f" checked="ckecked">
 					</div>

 					<div>
					    <div><label>Estado Civil</label></div>
					    <label for="est_soltero">Soltero </label>
					    <input type="radio" id="est_soltero" name="estado_civil" value="soltero">
					    <label for="est_casado">Casado </label>
					    <input type="radio" id="est_casado" name="estado_civil" value="casado" checked="ckecked">
					    <label for="est_otro">Otro </label>
					    <input type="radio" id="est_otro" name="estado_civil" value="otro">
 					</div>

					<div>
						<input id="registrate" type="submit" value="Regístrate">	
					</div>
						
					</form>
				</div>

		</div>
		<hr>	
		<div id="tabla">
			<?php 
				$conexion =new mysqli('localhost','root','','bdd');
				if($conexion-> connect_error) die ($conexion->connect_error);

				$consulta="SELECT * FROM clientes";
				$respuesta=$conexion ->query($consulta);

				echo '<table style="width:100%">';
				echo '<tr><h2>Clientes Registrados</h2></tr>';
				echo '<tr>';
				echo '<td>Nombre</td>
		    			<td><h3>Apellidos</h3></td> 
		    			<td><h3>Edad</h3></td>
		    			<td><h3>Peso</h3></td>
		    			<td><h3>Genero</h3></td>
		    			<td><h3>Estado Civil</h3></td>
		 				 </tr>';
				while($rows =  mysqli_fetch_assoc($respuesta)) 
					  { 
					    echo "<tr>" 
					           ."<td>".$rows['nombre']."</td>" 
					           ."<td>".$rows['apellidos']."</td>" 
					           ."<td>".$rows['edad']."</td>" 
					           ."<td>".$rows['peso']."</td>" 
					           ."<td>".$rows['genero']."</td>" 
					           ."<td>".$rows['estado_civil']."</td>" 
					           ."</tr>"; 
					  } 
			 ?>
		</div>
	<center>

</body>
</html>

							
							  