<?php
require_once __DIR__ . '/../database/conexion.php';

function guardarReservaRestaurante($nombre, $fecha, $hora, $personas, $restaurante) {
    $conn = conectarBD();

    $stmt = $conn->prepare("INSERT INTO reservas_restaurantes (nombre, fecha, hora, personas, restaurante) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $nombre, $fecha, $hora, $personas, $restaurante);

    if ($stmt->execute()) {
        return ['exito' => true, 'mensaje' => '¡Reserva realizada con éxito!'];
    } else {
        return ['exito' => false, 'mensaje' => 'Error al guardar la reserva: ' . $stmt->error];
    }

    $stmt->close();
    $conn->close();
}
?>