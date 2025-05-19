<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../iniciosesion.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Estilos/mis_reservas.css">
    <title>Mis Reservas</title>
</head>
<body>
    <div class="titulo">
        <h1>Mis Reservas</h1>
    </div>
    <div class="inicio">
        <button type="button" onclick="location.href='ver_reservas.php'">Reservas de Restaurantes</button>
        <button type="button" onclick="location.href='ver_reservas_hospedaje.php'">Reservas de Hospedaje</button>
        <button type="button" onclick="location.href='ver_reservas_servicio.php'">Reservas de Servicios</button>
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