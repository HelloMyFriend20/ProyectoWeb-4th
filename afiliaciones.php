<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/sesion.css">
    <title>Iniciar Sesion</title>
</head>
<body>
<section class="inicio">
        <div class="logo">
            <img src="imagenes/logo.png" alt="logo" width="200">
        </div>
        <nav class="menu_desplegable">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="hospedaje.php">hospedaje</a></li>
                <li><a href="restaurantes.php">Restaurantes</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="afiliaciones.php">Iniciar Sesion</a></li>
            </ul>
        </nav>
    </section>
    <div class="recuadro">
        <h1>Afiliación</h1>
        <p>Ingresa tu número de identificación para verificar si eres afiliado a nuestro club campestre:</p>

        <input type="number" id="userId" placeholder="Numero de identificación">
        <button id="checkButton">Verificar</button>
        <p id="result"></p>

        <script src="JavaScript/app.js"></script>
        <div class="vacio">
    </div>
    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogota D.C. - Colombia</p>
            <p>Atencion al asociado: 3134180766</p>
            <p>Correo: contacto@puentesreyes.com</p>
        </div>
        <div class="redes_sociales">
            <div class="instagram">
                <a href="https://www.instagram.com/andres_pedroza_1504/"><img src="https://cdn.pixabay.com/photo/2021/06/15/12/17/instagram-6338401_1280.png" alt="Instagram" title="Instagram" width="50" height="50"></a>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/HelloMyFriend2020"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png" alt="Facebook" title="Facebook" width="50" height="50"></a>
            </div>
        </div>
    </footer>
</body>
</html>