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
    <link rel="stylesheet" href="Estilos/hospedaje.css">
    <title>Hoteles</title>
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
    <div class="imagenes">
        <div class="imagen1">
            <a href="#hoteles"><img src="imagenes/hotel.jpg" loading="eager" alt="Hoteles"></a>
            <div class="texto_imagen">HOTELES</div>
        </div>
        <div class="imagen2">
            <a href="#cabañas"><img src="imagenes/cabañas.jpg" loading="eager" alt="Cabañas"></a>
            <div class="texto_imagen">CABAÑAS</div>
        </div>
    </div>
    <section class="hoteles">
        <div class="titulo_hoteles" id="hoteles">
            <h2>Hoteles</h2>
            <p><i>Disfruta de nuestros hoteles</i></p>
        </div>
        <div class="varios_hoteles">
            <div class="hotel1">
                <h3>Hotel Melbourne</h3>
                <br>
                <a href="#Melbourne"><img src="https://www.construcia.com/wp-content/uploads/2023/10/Construcia-Hyde-158-700x467.jpg" loading="lazy" alt="Imagen_Melbourne" width="380" height="300"></a>
            </div>
            <div class="hotel1">
                <h3>Hotel Calderon Cortes</h3>
                <br>
                <a href="#Calderon"><img src="https://cdn.forbes.co/2020/02/sofitel-legend-santa-clara-outdoor-pool.jpg" loading="lazy" alt="Imagen_Calderon_Cortes" width="380" height="300"></a>
            </div>
            <div class="hotel1">
                <h3>Hotel Reyes</h3>
                <br>
                <a href="#Reyes"><img src="https://www.realhotelsandresorts.com/wp-content/uploads/2024/08/fachada-principal-700x467.jpg" loading="lazy" alt="Imagen_Reyes" width="380" height="300"></a>
            </div>
        </div>
        <div class="hotelPrincipal">
            <div class="hotelInfo" id="Melbourne">
                <h3>Hotel Melbourne</h3>
                <br>
                <img src="https://www.construcia.com/wp-content/uploads/2023/10/Construcia-Hyde-158-700x467.jpg" loading="lazy" alt="Melbourne">
            </div>
            <div class="hotelInfo2">
                <h4>Informacion Hotel Melbourne</h4>
                <p>Ideal para descansar con tu familia, pareja y amigos, contando con habitaciones bastantes grandes, servicio al cuarto, servicio de bar, restaurante, zona de juegos y piscinas.</p>
                <p>Nuestro hotel es pet-friendly por lo tendras la posibilidad de traer a tu amigo peludo.</p>
                <p>Reserva ya desde $290.000 <i>($230.000 Afiliados)</i></p>
                <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_h.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
                <button><a href="#inicio"><b>Volver al inicio</b></a></button>
            </div>
        </div>
        <div class="hotelPrincipal">
            <div class="hotelInfo2" id="Calderon">
                <h4>Informacion Hotel Calderon Cortes</h4>
                <p>Nuestro hotel mas lujoso con nuestros planes mas completos, cuenta nuestras habitaciones mas lujosas y espaciosas, servicio a la habitacion ,excelente para pasar unas perfectas vacaciones con pareja, familia y amigos. Cuenta con teatro, restaurante, bar, disco, salon de juegos y multiples piscinas.</p>
                <p>Reserva ya desde $410.000 <i>($350.000 Afiliados)</i></p>
                <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_h.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
                <button><a href="#inicio"><b>Volver al inicio</b></a></button>
            </div>
            <div class="hotelInfo">
                <h3>Hotel Calderon Cortes</h3>
                <br>
                <img src="https://cdn.forbes.co/2020/02/sofitel-legend-santa-clara-outdoor-pool.jpg" loading="lazy" alt="Calderon Cortes" width="700">
            </div>
        </div>
        <div class="hotelPrincipal">
            <div class="hotelInfo" id="Reyes">
                <h3>Hotel Reyes</h3>
                <br>
                <img src="https://www.realhotelsandresorts.com/wp-content/uploads/2024/08/fachada-principal-700x467.jpg" loading="lazy" alt="Reyes"> 
            </div>
            <div class="hotelInfo2">
                <h4>Descripcion Hotel Reyes</h4>
                <p>Sin dejar de ser lujoso te presentamos nuestra opciones mas economica a la hora de reservar nuestros hoteles.</p>
                <p>Especial para descansar y disfrutar de tus vacaciones, cuenta con restaurante, bar, servicio a la habitación, piscina y salon de juegos.</p>
                <p>Reserva ya desde $210.000 <i>($150.000 Afiliados)</i></p>
                <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_h.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
                <button><a href="#inicio"><b>Volver al inicio</b></a></button>
            </div>
        </div>
    </section>
    <section class="cabañas">
        <div class="titulo_hoteles" id="cabañas">
            <h2>Cabañas</h2>
            <p>Disfruta de nuestras cabañas</p>
        </div>
        <div class="varios_hoteles">
            <div class="hotel1">
                <h3>Cabaña 1</h3>
                <br>
                <a href="#Zona_A"><img src="https://posadasrurales.co/8398-large_default/eco-cabanas-el-abuelo-la-calera-cundinamarca.jpg" loading="lazy" alt="" width="380" height="300"></a>
            </div>
            <div class="hotel1">
                <h3>Cabaña 2</h3>
                <br>
                <a href="#Zona_B"><img src="https://maderasylaminasespeciales.com/wp-content/uploads/2023/03/Cabanas-En-Madera.jpg" loading="lazy" alt="" width="380" height="300"></a>
            </div>
        </div>
        <div class="hotelPrincipal">
            <div class="hotelInfo2" id="Zona_A">
                <h4>Informacion Zona A</h4>
                <p>Zona A es una de nuestras zonas mas tranquilas, ideal para descansar y disfrutar de la naturaleza, cuenta con un pequeño lago y una piscina.</p>
                <p>Reserva ya desde $150.000 <i>($100.000 Afiliados)</i></p>
                <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_h.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
                <button><a href="#inicio"><b>Volver al inicio</b></a></button>
            </div>
            <div class="hotelInfo">
                <h3>Cabañas Zona A</h3>
                <br>
                <img src="https://posadasrurales.co/8398-large_default/eco-cabanas-el-abuelo-la-calera-cundinamarca.jpg" loading="lazy" alt="Zona A" width="700">
            </div>
        </div>
        <div class="hotelPrincipal">
            <div class="hotelInfo" id="Zona_B">
                <h3>Cabañas Zona B</h3>
                <br>
                <img src="https://maderasylaminasespeciales.com/wp-content/uploads/2023/03/Cabanas-En-Madera.jpg" loading="lazy" alt="Zona B" width="700">
            </div>
            <div class="hotelInfo2">
                <h4>Informacion Zona B</h4>
                <p>Zona B es una de nuestras zonas mas tranquilas, ideal para descansar y disfrutar de la naturaleza, cuenta con un pequeño lago y una piscina.</p>
                <p>Reserva ya desde $150.000 <i>($100.000 Afiliados)</i></p>
                <?php if ($usuario): ?>
                    <button><a href="formulario_reserva_h.php"><b>Reserva con nosotros</b></a></button>
                <?php else: ?>
                    <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
                <?php endif; ?>
                <button><a href="#inicio"><b>Volver al inicio</b></a></button>
            </div>
        </div>
    </section>
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