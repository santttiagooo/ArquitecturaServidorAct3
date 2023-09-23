<?php
session_start();
include("conexion.php");

// Obtener el ID y la contraseña del formulario
$id = $_POST["id"];

// Consultar la base de datos para verificar el numero de documento y obtener la información del usuario
$sql = "SELECT id, nombre, tipo FROM usuarios WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id"];
    $_SESSION["nombre"] = $row["nombre"];
    $_SESSION["tipo"] = $row["tipo"];
    // Acceder a pagina ya que se cargan los datos del registro y se ponen en la viable $_SESSION
    header("Location: inicio_exitoso.php");
} else {
    // Inicio de sesión fallido
    //No se encuentra informacion en la BDDD asi que se redirige a la pagina indicativa
    header("Location: inicio_fallido.php");
}

$conn->close();
?>