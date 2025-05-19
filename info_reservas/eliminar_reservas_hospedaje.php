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

$resultado = eliminarReservaHospedaje($idReserva, $idUsuario);

if ($resultado['exito']) {
    header("Location: ver_reservas_hospedaje.php?mensaje=" . urlencode("Reserva eliminada correctamente"));
    exit();
} else {
    echo "Error al eliminar la reserva: " . $resultado['mensaje'];
}
?>
