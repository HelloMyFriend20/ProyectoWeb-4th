<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ../iniciosesion.html");
    exit();
}

require_once '../includes/reservas.php';

$idUsuario = $_SESSION['usuario']['id'];

// Verificar si se recibió el ID de la reserva
if (!isset($_GET['id_reserva']) || empty($_GET['id_reserva'])) {
    echo "ID de reserva no proporcionado.";
    exit();
}

$idReserva = intval($_GET['id_reserva']);

// Verificar si la reserva pertenece al usuario antes de eliminar
$reserva = obtenerReservaPorId($idReserva, $idUsuario);

if (!$reserva) {
    echo "Reserva no encontrada o no tienes permiso para eliminarla.";
    exit();
}

// Eliminar la reserva
$resultado = eliminarReserva($idReserva);

if ($resultado['exito']) {
    header("Location: ver_reservas.php?mensaje=" . urlencode("Reserva eliminada correctamente"));
    exit();
} else {
    echo "Error al eliminar la reserva: " . $resultado['mensaje'];
}
?>
