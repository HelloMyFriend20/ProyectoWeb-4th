<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../iniciosesion.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Reservas</title>
</head>
<body>
    <h1>Mis Reservas</h1>
    <ul>
        <li><a href="ver_reservas.php">Reservas de Restaurantes</a></li>
        <li><a href="ver_reservas_hospedaje.php">Reservas de Hospedaje</a></li>
        <li><a href="ver_reservas_servicio.php">Reservas de Servicios</a></li>
    </ul>
</body>
</html>
