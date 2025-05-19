<?php
require_once 'includes/reservas.php';
require_once 'includes/auth.php';

iniciarSesion();
$usuario = obtenerUsuarioActual();

if (!$usuario) {
    header("Location: login.php");
    exit;
}

$idUsuario = $usuario['id'];

$fecha = $_POST['fecha'] ?? '';
$hora = $_POST['hora'] ?? '';
$personas = $_POST['personas'] ?? 0;
$restaurante = $_POST['restaurante'] ?? '';

if (empty($fecha) || empty($hora) || empty($personas) || empty($restaurante)) {
    echo "Faltan datos para completar la reserva.";
    exit;
}

$resultado = guardarReservaRestaurante($idUsuario, $fecha, $hora, (int)$personas, $restaurante);

echo "<script>alert('" . $resultado['mensaje'] . "'); window.location.href='index.php';</script>";

?>
