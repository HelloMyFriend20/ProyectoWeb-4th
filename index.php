<?php
session_start();
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/styles.css">
    <title>Puentes Reyes Country Club</title>
</head>
<body>
    <section class="inicio">
        <div class="logo">
            <img src="imagenes/logo.png" alt="logo" width="200">
        </div>
        <nav class="menu_desplegable">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="hospedaje.php">Hospedaje</a></li>
                <li><a href="restaurantes.php">Restaurantes</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <?php if ($usuario): ?>
                    <li><a href="editar_perfil.html">Editar Perfil</a></li>
                <?php else: ?>
                    <li><a href="iniciosesion.html">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </section>
    <div class="titulo">
        <h1>Puentes Reyes Country Club</h1>
    </div>    
    <div class="servicios">
        <div class="club">
            <h2>El Club</h2>
            <p>Puentes Reyes Country Club es un exclusivo club campestre que combina elegancia, naturaleza y bienestar en un entorno diseñado para el descanso y la recreación. Ofrecemos a nuestros afiliados y visitantes una experiencia inolvidable con acceso a cabañas acogedoras de tiempo ilimitado, ideales para desconectarse y disfrutar de la tranquilidad que solo la vida campestre puede brindar.</p>
            <br>
            <p>Contamos con una amplia infraestructura que incluye hoteles de primera categoría, restaurantes con exquisita gastronomía local e internacional, y una variedad de servicios deportivos y recreativos para todas las edades. Desde canchas deportivas, piscinas y senderos ecológicos, hasta actividades de relajación y entretenimiento familiar. Ven y descubre un lugar donde la naturaleza, el confort y el buen vivir se encuentran. En Puentes Reyes, cada día es una oportunidad para relajarte, reconectar y disfrutar la vida al máximo.</p>
        </div>
        <div class="imagen_club">
            <img src="imagenes/club.jpg" loading="lazy" alt="Club">
        </div>     
    </div>
    <div class="reservas">
        <h2>Mis Reservas</h2>
        <p>Aquí puedes ver y gestionar tus reservas.</p>
        <a href="info_reservas/mis_reservas.php">Ver Reservas</a>
        <a href="funciones_bd.php">Funciones bd</a>
    </div>
    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogota D.C. - Colombia</p>
            <p>Atención al asociado: 3134180766</p>
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