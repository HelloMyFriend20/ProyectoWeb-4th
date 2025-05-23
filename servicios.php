<?php
session_start();
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/servicios.css">
    <title>Servicios</title>
</head>
<body>
    <section class="inicio" id="inicio">
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
        <h1>Servicios</h1>
    </div>
    <div class="descripcion">
        <div class="info_descripcion">
            <h2>Disfruta de nuestros servicios</h2>
            <br>
            <p>En Club Campestre Puentes Reyes, ofrecemos una variedad de servicios diseñados para satisfacer todas tus necesidades. Desde instalaciones deportivas de primer nivel hasta áreas recreativas y de bienestar, nuestro objetivo es brindarte una experiencia completa y placentera. Ya sea que busques relajarte en nuestras zonas verdes, disfrutar de actividades al aire libre o participar en eventos sociales, tenemos algo para todos. Ven y descubre todo lo que tenemos para ofrecerte.</p>
        </div>
        <div class="imagen_descripcion">
            <img src="imagenes/DescripcionServicios.jpg" alt="descripcion_servicios">
        </div>
    </div>
    <div class="servicios">
        <div class="servicios1">
            <h3>Piscina</h3>
            <br>
            <a href="#piscina"><img src="imagenes/servicio_piscina.jpg" loading="lazy" alt="piscina" width="380" height="300"></a>
        </div>
        <div class="servicios1">
            <h3>Bolera</h3>
            <br>
            <a href="#bolera"><img src="imagenes/servicio_bolos.jpg" loading="lazy" alt="bolera" width="380" height="300"></a>
        </div>
        <div class="servicios1">
            <h3>Salon de juegos</h3>
            <br>
            <a href="#juegos"><img src="imagenes/servicio_juegos.jpg" loading="lazy" alt="salon_juegos" width="380" height="300"></a>
        </div>
    </div>
    <div class="servicios">
        <div class="servicios1">
            <h3>Teatro</h3>
            <br>
            <a href="#teatro"><img src="imagenes/servicio_teatro.jpg" loading="lazy" alt="teatro" width="380" height="300"></a>
        </div>
        <div class="servicios1">
            <h3>Gimnasio</h3>
            <br>
            <a href="#gimnasio"><img src="imagenes/servicio_gimnasio.jpg" loading="lazy" alt="gimnasio" width="380" height="300"></a>
        </div>
        <div class="servicios1">
            <h3>Canchas deportivas</h3>
            <br>
            <a href="#canchas"><img src="imagenes/servicio_canchas.jpg" loading="lazy" alt="canchas_deportivas" width="380" height="300"></a>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="piscina">
            <h3>Piscina</h3>
            <br>
            <img src="imagenes/servicio_piscina.jpg" loading="lazy" alt="piscina">
        </div>
        <div class="parte2">
            <h4>Información piscina</h4>
            <p>Disfruta de nuestra piscina al aire libre, un lugar perfecto para relajarte y refrescarte en los días soleados. Con áreas para adultos y niños, es ideal para toda la familia. Ven y disfruta de un día de diversión bajo el sol.</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="bolera">
            <h3>Bolera</h3>
            <br>
            <img src="imagenes/servicio_bolos.jpg" loading="lazy" alt="bolera">
        </div>
        <div class="parte2">
            <h4>Información bolera</h4>
            <p>Ven a disfrutar de una emocionante partida de bolos en nuestra espectacular bolera. Con varias pistas disponibles, es el lugar perfecto para pasar un rato divertido con amigos y familiares. Ya seas principiante o experto, ¡todos son bienvenidos!</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="juegos">
            <h3>Salon de juegos</h3>
            <br>
            <img src="imagenes/servicio_juegos.jpg" loading="lazy" alt="salon_juegos">
        </div>
        <div class="parte2">
            <h4>Información salon de juegos</h4>
            <p>Disfruta de una amplia variedad de juegos en nuestro salón de juegos. Desde mesas de billar hasta juegos de mesa, hay algo para todos. Ven y diviértete con amigos o familia en un ambiente acogedor y entretenido.</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="teatro">
            <h3>Teatro</h3>
            <br>
            <img src="imagenes/servicio_teatro.jpg" loading="lazy" alt="teatro">
        </div>
        <div class="parte2">
            <h4>Información teatro</h4>
            <p>Asiste a nuestras funciones en el teatro del club, donde ofrecemos una variedad de espectáculos y eventos culturales. Desde obras de teatro hasta conciertos, siempre hay algo emocionante que ver. ¡No te lo pierdas!</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="gimnasio">
            <h3>Gimnasio</h3>
            <br>
            <img src="imagenes/servicio_gimnasio.jpg" loading="lazy" alt="gimnasio">
        </div>
        <div class="parte2">
            <h4>Información gimnasio</h4>
            <p>Mantente en forma en nuestro gimnasio totalmente equipado. Ofrecemos una variedad de máquinas y equipos para ayudarte a alcanzar tus objetivos de fitness. Ya seas principiante o experto, nuestro gimnasio es el lugar ideal para entrenar.</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="servicios_principales">
        <div class="parte1" id="canchas">
            <h3>Canchas deportivas</h3>
            <br>
            <img src="imagenes/servicio_canchas.jpg" loading="lazy" alt="canchas_deportivas">
        </div>
        <div class="parte2">
            <h4>Información canchas deportivas</h4>
            <p>Disfruta de nuestras canchas deportivas, donde puedes practicar tu deporte favorito. Desde tenis hasta fútbol, tenemos instalaciones de alta calidad para que disfrutes de una experiencia deportiva excepcional. Ven y juega con amigos o únete a nuestras ligas y torneos.</p>
            <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_s.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <br>
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