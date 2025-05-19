<?php
session_start();

// Verificar si el usuario ha iniciado sesión correctamente
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
$reserva = obtenerReservaPorId($idReserva, $idUsuario);

if (!$reserva) {
    echo "Reserva no encontrada o no tienes permiso para editarla.";
    exit();
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];

    $resultado = actualizarReserva($idReserva, $fecha, $hora, $personas);

    if ($resultado['exito']) {
        header("Location: ver_reservas.php?mensaje=" . urlencode("Reserva actualizada correctamente"));
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Estilos/sesion.css">
    <title>Editar Reserva</title>
</head>
<body>
    <div class="sesion">
        <h1>Editar Reserva</h1>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required value="<?php echo htmlspecialchars($reserva['fecha']); ?>"><br><br>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" required value="<?php echo htmlspecialchars($reserva['hora']); ?>"><br><br>

            <label for="personas">Número de personas:</label>
            <input type="number" name="personas" required min="1" value="<?php echo htmlspecialchars($reserva['personas']); ?>"><br><br>

            <input type="submit" value="Actualizar Reserva">
        </form>
    </div>
    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogota D.C. - Colombia</p>
            <p>Atencion al asociado: 3134180766</p>
            <p>Correo: contacto@puentesreyes.com</p>
        </div>
        <div class="redes_sociales">
            <div class="instagram">
                <a href="https://www.instagram.com/andres_pedroza_1504/"><img src="https://cdn.pixabay.com/photo/2021/06/15/12/17/instagram-6338401_1280.png" alt="Instagram" title="Instagram" width="50" height="50">Instagram</a>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/HelloMyFriend2020"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png" alt="Facebook" title="Facebook" width="50" height="50">Facebook</a>
            </div>
        </div>
    </footer>
</body>
</html>
