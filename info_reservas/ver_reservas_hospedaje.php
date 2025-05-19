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

// Obtener reservas de hospedaje del usuario
$reservas = obtenerReservasHospedajeUsuario($idUsuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Reservas de Hospedaje</title>
    <link rel="stylesheet" href="../Estilos/sesion.css">
</head>
<body>
    <div class="sesion">
        <h1>Reservas de Hospedaje de <?php echo htmlspecialchars($nombreUsuario); ?></h1>

        <?php if (empty($reservas)): ?>
            <p>No tienes reservas de hospedaje registradas.</p>
        <?php else: ?>
            <table border="1" cellpadding="10">
                <thead>
                    <tr>
                        <th>Tipo de Hospedaje</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Personas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservas as $reserva): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($reserva['hospedaje']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['hora']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['personas']); ?></td>
                            <td>
                                <a href="editar_reservas_hospedaje.php?id_reserva=<?php echo $reserva['id_reserva']; ?>">Editar</a>
                                <a href="eliminar_reservas_hospedaje.php?id_reserva=<?php echo $reserva['id_reserva']; ?>" onclick="return confirm('¿Estás seguro de eliminar esta reserva de hospedaje?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogotá D.C. - Colombia</p>
            <p>Atención al asociado: 3134180766</p>
            <p>Correo: contacto@puentesreyes.com</p>
        </div>
        <div class="redes_sociales">
            <div class="instagram">
                <a href="https://www.instagram.com/andres_pedroza_1504/"><img src="https://cdn.pixabay.com/photo/2021/06/15/12/17/instagram-6338401_1280.png" width="50" height="50">Instagram</a>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/HelloMyFriend2020"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png" width="50" height="50">Facebook</a>
            </div>
        </div>
    </footer>
</body>
</html>
