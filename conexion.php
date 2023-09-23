<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, "$username", $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
//Arreglar caracteres latinos y tildes
if(!$conn->set_charset("utf8")){
  printf("Error cargando el conjunto de caracteres utf8: %\n", $conexion->error);
  exit();
}

?>