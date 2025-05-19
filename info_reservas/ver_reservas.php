<?php
session_start();

// Verificar si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['usuario'])) {
    header("Location: ../iniciosesion.html");
    exit();
}

require_once '../includes/reservas.php';

$idUsuario = $_SESSION['usuario']['id'];
$nombreUsuario = $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido'];

// Obtener reservas del usuario
$reservas = obtenerReservasUsuario($idUsuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Reservas</title>
    <link rel="stylesheet" href="../Estilos/sesion.css"> <!-- Ajusta si tienes un CSS específico -->
</head>
<body>
    <div class="sesion">
        <h1>Reservas de <?php echo htmlspecialchars($nombreUsuario); ?></h1>

        <?php if (empty($reservas)): ?>
            <p>No tienes reservas registradas.</p>
        <?php else: ?>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Restaurante</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Personas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservas as $reserva): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($reserva['restaurante']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['hora']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['personas']); ?></td>
                            <td>
                                <a href="editar_reservas.php?id_reserva=<?php echo $reserva['id_reserva']; ?>">Editar</a>
                                <a href="eliminar_reservas.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" onclick="return confirm('¿Estás seguro de eliminar esta reserva?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
