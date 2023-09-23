<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión exitoso</title>
    <link rel="stylesheet" type="text/css" href="formato.css">
</head>
<body>
    <h2>Información encontrada</h2>
    <!-- Muestra los datos obtenidos de la BBDD usando PHP y los datos almacenados en $_SESSION-->
    <p>Bienvenido, <?php echo $_SESSION["nombre"]; ?>.</p>
    <p>Documento: <?php echo $_SESSION["id"]; ?></p>
    <p>Tipo de usuario: <?php echo $_SESSION["tipo"]; ?></p>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>