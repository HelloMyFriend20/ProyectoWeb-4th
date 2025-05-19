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
$hospedaje = $_POST['hospedaje'] ?? '';

if (empty($fecha) || empty($hora) || empty($personas) || empty($hospedaje)) {
    echo "Faltan datos para completar la reserva.";
    exit;
}

$resultado = guardarReservaHospedaje($idUsuario, $fecha, $hora, (int)$personas, $hospedaje);

echo "<script>alert('" . $resultado['mensaje'] . "'); window.location.href='index.php';</script>";

?>