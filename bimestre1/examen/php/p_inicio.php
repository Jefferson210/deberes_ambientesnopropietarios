<?php

$error = '';

if($_POST){
  $nom = $_POST['nombre'];
  $ape = $_POST['apellido'];
  $edad =$_POST['edad'];
  $peso = $_POST['peso'];
  $genero = $_POST['genero'];
  $estado_civil = $_POST['estado_civil'];

  if ($nom=="" || $ape=="" || $edad=="" || $peso=="" || $genero=="" || $estado_civil=="") {
    echo '<h2>Debe llenar todos los campos</h2>';
  }
  else
  {
        if($error == ''){
          $conn = new mysqli('localhost' , 'root' , '', 'bdd');
          if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);

          $query = "INSERT INTO clientes 
                          (
                            nombre, 
                            apellidos,
                            edad,
                            peso,
                            genero,
                            estado_civil
                          )
                        VALUES (
                          '$nom',
                          '$ape',
                          '$edad',
                          '$peso',
                          '$genero',
                          '$estado_civil'
                          )";
          $result = $conn ->query($query);
            if (!$result) {
              $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
            }  
        }

 }
}