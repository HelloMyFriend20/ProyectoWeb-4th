<?php
require_once 'includes/reservas.php';
require_once 'includes/auth.php';

iniciarSesion();
$usuario = obtenerUsuarioActual();

if (!$usuario) {
    header("Location: index.php");
    exit;
}

$idUsuario = $usuario['id'];

$fecha = $_POST['fecha'] ?? '';
$hora = $_POST['hora'] ?? '';
$personas = $_POST['personas'] ?? 0;
$servicio = $_POST['servicio'] ?? '';

if (empty($fecha) || empty($hora) || empty($personas) || empty($servicio)) {
    echo "Faltan datos para completar la reserva.";
    exit;
}

$resultado = guardarReservaServicio($idUsuario, $fecha, $hora, (int)$personas, $servicio);

echo "<script>alert('" . $resultado['mensaje'] . "'); window.location.href='index.php';</script>";

?>
