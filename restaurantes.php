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
    <link rel="stylesheet" href="Estilos/restaurantes.css">
    <title>Restaurantes</title>
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
        <h1>Restaurantes</h1>
    </div>
    <div class="descripcion">
        <div class="imagen_descripcion">
            <img src="imagenes/DescripcionRestaurente.jpg" alt="descripcion">
        </div>
        <div class="info_descripcion">
            <h2>Disfruta de nuestros restaurantes</h2>
            <br>
            <p>En Club Campestre Puentes Reyes, ofrecemos una experiencia culinaria excepcional en nuestros restaurantes. Desde platos tradicionales hasta opciones gourmet, cada bocado es una celebración de sabores y frescura. Nuestros chefs utilizan ingredientes locales y de temporada para crear menús que deleitan los sentidos. Ya sea que busques un almuerzo ligero o una cena elegante, nuestros restaurantes son el lugar perfecto para disfrutar de la buena comida en un ambiente acogedor.</p>
        </div>
    </div>
    <div class="varios_restaurantes">
        <div class="varios">
            <h3>Restaurantes</h3>
            <br>
            <a href="#restaurantes"><img src="imagenes/restaurante_icono1.jpg" loading="lazy" alt="Restaurantes" width="380" height="300"></a>
        </div>
        <div class="varios">
            <h3>Restaurantes Hoteles</h3>
            <br>
            <a href="#hoteleros"><img src="imagenes/hotel.jpg" loading="lazy" alt="Hoteleros" width="380" height="300"></a>
        </div>
        <div class="varios">
            <h3>BBQ / Cafetería</h3>
            <br>
            <a href="#BBQ"><img src="imagenes/restaurante_icono2.jpg" loading="lazy" alt="Cafeteria" width="380" height="300"></a>
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte1" id="restaurantes">
            <h3>Restaurante White</h3>
            <br>
            <img src="imagenes/restaurante1.jpg" loading="lazy" alt="restaurante">
        </div>
        <div class="parte2">
            <h4>Información White</h4>
            <p>Reserva en nuestro restaurante más lujoso donde podras disfrutar de nuestra carta gourmet aprovada por criticos y chefs a nivel mundial, contamos con un excelente servicio y especial preparacion de nuestros alimentos.</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte1">
            <h3>Restaurante Pedroza Beltran</h3>
            <br>
            <img src="imagenes/restaurante2.jpg" loading="lazy" alt="restaurante">
        </div>
        <div class="parte2">
            <h4>Información Pedroza Beltran</h4>
            <p>Reserva en nuestro aclamado restaurante ubicado en nuestra sede principal en Bogota D.C. Donde podras disfrutar de una agradable experiencia y compartir con tus seres queridos nuestra excelente comida</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte1">
            <h3>Restaurante Black Velvet</h3>
            <br>
            <img src="imagenes/restaurante3.jpg" loading="lazy" alt="restaurante">
        </div>
        <div class="parte2">
            <h4>Información Black Velvet</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero qui adipisci corporis, deserunt dolorum libero in eius deleniti alias aliquid earum labore atque distinctio dolores eos illo aliquam culpa? Praesentium!</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte2" id="hoteleros">
            <h4>Información Restaurante Melbourne</h4>
            <p>Acompañanos en uno de nuestros mejores restaurantes hoteleros, donde podras contar con un excepcional servicio y una maravillosa comida, aprovechando nuestra selecta carta.</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
        <div class="parte1">
            <h3>Restaurante Melbourne</h3>
            <br>
            <img src="https://www.construcia.com/wp-content/uploads/2023/10/Construcia-Hyde-158-700x467.jpg" loading="lazy" alt="Melbourne">
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte2">
            <h4>Información Restaurante Cortes</h4>
            <p>Nuestro mejor restaurante hotelero, catalogado como el sexto mejor del mundo por la revista forbes, con nuestra excelente carta, carismatico personal y cordial servicio garantizamos una maravillosa experiencia</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
        <div class="parte1">
            <h3>Restaurante Cortes</h3>
            <br>
            <img src="https://cdn.forbes.co/2020/02/sofitel-legend-santa-clara-outdoor-pool.jpg" loading="lazy" alt="">
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte2">
            <h4>Información Restaurante Reyes</h4>
            <p>Entra a nuestro restaurante mas barato, corrientazos a $12.000 y almuerzo ejecutivo a $15.000, encuentra el guizo de doña Susana y el sason de doña Esperanza. Te esperamos gustosos.</p>
            <button><a href="iniciosesion.html"><b>Reserva con nosotros</b></a></button>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
        <div class="parte1">
            <h3>Restaurante Reyes</h3>
            <br>
            <img src="https://www.realhotelsandresorts.com/wp-content/uploads/2024/08/fachada-principal-700x467.jpg" loading="lazy" alt="">
        </div>
    </div>
    <div class="restaurantes_principales">
        <div class="parte1" id="BBQ">
            <h3>BBQ / Cafetería</h3>
            <br>
            <img src="imagenes/cafeteria1.jpg" alt="restaurante">
        </div>
        <div class="parte2">
            <h4>Información BBQ / Cafetería</h4>
            <p>En esta seccion podras hallar breve informacion acerca de nuestra cafeteria y de la plazoleta de comida y sus diversas cadenas de comida rapida.</p>
            <p>Nuestra cafetería no maneja sistema de reservas.</p>
            <button><a href="#inicio"><b>Volver al inicio</b></a></button>
        </div>
    </div>
    <div class="plazoleta">
        <img src="https://w7.pngwing.com/pngs/814/748/png-transparent-hamburger-burger-king-restaurant-fast-food-logo-burger-king-text-orange-fast-food-restaurant-thumbnail.png" alt="" class="img1">
        <img src="https://e7.pngegg.com/pngimages/906/498/png-clipart-submarine-sandwich-subway-oldbury-restaurant-others-food-text-thumbnail.png" alt="" class="img2">
        <img src="https://greenhills.com.co/wp-content/uploads/2024/01/LOGO-HAMBURGUESAS-EL-CORRAR-GREEN-HILLS-TUNJA.png" alt="" class="img3">
        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/mcdonald%27s-logo-design-template-c03c253e9d3c73bacdf4d3499e6a0b72_screen.jpg?ts=1700533846" alt="" class="img4">
        <img src="https://e7.pngegg.com/pngimages/651/153/png-clipart-kfc-logo-kfc-logo-icons-logos-emojis-iconic-brands-thumbnail.png" alt="" class="img5">
        <img src="https://w1.pngwing.com/pngs/1001/264/png-transparent-pizza-pizza-dominos-pizza-logo-food-papa-johns-pizza-cake-franchising.png" alt="" class="img6">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/759cad206461755.Y3JvcCw4NDEsNjU4LDAsMA.jpg" alt="" class="img7"> 
    </div>
    <div class="boton">
        <button><a href="#inicio"><b>Volver al inicio</b></a></button>
    </div>
    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogota D.C. - Colombia</p>
            <p>Atencion al arestaurantessociado: 3134180766</p>
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