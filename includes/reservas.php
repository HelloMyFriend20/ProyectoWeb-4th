<?php
require_once __DIR__ . '/../database/conexion.php';

function guardarReservaRestaurante($idUsuario, $fecha, $hora, $personas, $restaurante) {
    $conn = conectarBD();

    // Obtener nombre y apellido del usuario
    $stmtUser = $conn->prepare("SELECT nombre, apellido FROM registro WHERE id = ?");
    $stmtUser->bind_param("i", $idUsuario);
    $stmtUser->execute();
    $resultado = $stmtUser->get_result();
    $usuario = $resultado->fetch_assoc();
    $stmtUser->close();

    if (!$usuario) {
        return ['exito' => false, 'mensaje' => 'Usuario no encontrado.'];
    }

    $nombreCompleto = $usuario['nombre'] . ' ' . $usuario['apellido'];

    // Insertar reserva
    $stmt = $conn->prepare("INSERT INTO reservas_restaurantes (nombre, fecha, hora, personas, restaurante, id_usuario)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisi", $nombreCompleto, $fecha, $hora, $personas, $restaurante, $idUsuario);

    if ($stmt->execute()) {
        $mensaje = '¡Reserva realizada con éxito!';
    } else {
        $mensaje = 'Error al guardar la reserva: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    return ['exito' => true, 'mensaje' => $mensaje];
}

// ✅ FUNCIÓN ACTUALIZADA CON INFORMACIÓN DEL RESTAURANTE
function obtenerReservasUsuario($idUsuario) {
    $conn = conectarBD();

    // Usamos JOIN si quieres traer datos de otra tabla de restaurantes (opcional)
    $sql = "SELECT rr.id_reserva, rr.fecha, rr.hora, rr.personas, rr.restaurante
            FROM reservas_restaurantes rr
            WHERE rr.id_usuario = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $reservas = [];

    while ($fila = $resultado->fetch_assoc()) {
        $reservas[] = $fila;
    }

    $stmt->close();
    $conn->close();

    return $reservas;
}

// 🔁 Puedes agregar aquí más funciones como editarReserva(), eliminarReserva(), etc.
function obtenerReservaPorId($idReserva, $idUsuario) {
    $conn = conectarBD();

    $stmt = $conn->prepare("SELECT * FROM reservas_restaurantes WHERE id_reserva = ? AND id_usuario = ?");
    $stmt->bind_param("ii", $idReserva, $idUsuario);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $reserva = $resultado->fetch_assoc();

    $stmt->close();
    $conn->close();

    return $reserva;
}

function actualizarReserva($idReserva, $fecha, $hora, $personas) {
    $conn = conectarBD();

    $stmt = $conn->prepare("UPDATE reservas_restaurantes SET fecha = ?, hora = ?, personas = ? WHERE id_reserva = ?");
    $stmt->bind_param("ssii", $fecha, $hora, $personas, $idReserva);

    if ($stmt->execute()) {
        $mensaje = "Reserva actualizada correctamente.";
        $exito = true;
    } else {
        $mensaje = "Error al actualizar la reserva: " . $stmt->error;
        $exito = false;
    }

    $stmt->close();
    $conn->close();

    return ['exito' => $exito, 'mensaje' => $mensaje];
}

function eliminarReserva($idReserva) {
    $conn = conectarBD();

    $consulta = $conn->prepare("DELETE FROM reservas_restaurantes WHERE id_reserva = ?");
    if (!$consulta) {
        return ['exito' => false, 'mensaje' => 'Error en la preparación de la consulta: ' . $conn->error];
    }

    $consulta->bind_param("i", $idReserva);

    if ($consulta->execute()) {
        return ['exito' => true];
    } else {
        return ['exito' => false, 'mensaje' => 'Error al eliminar la reserva: ' . $consulta->error];
    }
}

?>