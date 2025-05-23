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

// Verificar si la reserva pertenece al usuario antes de editar

$reserva = obtenerReservaHospedajePorId($idReserva, $idUsuario);

if (!$reserva) {
    echo "Reserva no encontrada o no tienes permiso para editarla.";
    exit();
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];

    $resultado = actualizarReservaHospedaje($idReserva, $fecha, $hora, $personas);

    if ($resultado['exito']) {
        header("Location: ver_reservas_hospedaje.php?mensaje=" . urlencode("Reserva actualizada correctamente"));
        exit();
    } else {
        $error = $resultado['mensaje'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Reserva de Hospedaje</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Estilos/sesion.css">
</head>
<body>
    <div class="sesion">
        <h1>Editar Reserva de Hospedaje</h1><br>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST">

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required value="<?php echo htmlspecialchars($reserva['fecha']); ?>"><br><br>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" required value="<?php echo htmlspecialchars($reserva['hora']); ?>"><br><br>

            <label for="personas">Número de Personas:</label>
            <input type="number" name="personas" required min="1" value="<?php echo htmlspecialchars($reserva['personas']); ?>"><br><br>

            <input type="submit" value="Actualizar Reserva">
        </form>
    </div>
</body>
</html>
