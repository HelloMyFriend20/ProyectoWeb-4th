<?php
//Conexion a la base de datos
require_once 'database/conexion.php';

session_start();
$conn = conectarBD();
$servicios = [];

// Obtener lista de servicios
$result = $conn->query("SELECT nombre FROM servicios");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $servicios[] = $row['nombre'];
    }
}

// Verificar si hay sesión iniciada y obtener nombre y apellido desde la base de datos
$nombre = '';
$apellido = '';

if (isset($_SESSION['usuario'])) {
    $id_usuario = $_SESSION['usuario'];

    $stmt = $conn->prepare("SELECT nombre, apellido FROM registro WHERE id = ?");
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Estilos/sesion.css">
    <title>Reservar Servicio</title>
</head>
<body>
    <div class="sesion">
        <form action="guardar_reserva_s.php" method="POST">
            <h1>Reserva de servicio</h1><br>

            <p>Reserva a nombre de: <strong><?php echo htmlspecialchars($nombre . ' ' . $apellido); ?></strong></p><br><br>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required><br>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" required><br>

            <label for="personas">Número de personas:</label>
            <input type="number" name="personas" min="1" required><br>

            <label for="servicio">Seleccione el servicio:</label>
            <select name="servicio" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($servicios as $nombre_serv): ?>
                    <option value="<?php echo htmlspecialchars($nombre_serv); ?>">
                        <?php echo htmlspecialchars($nombre_serv); ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>
            
            <input type="submit" value="Reservar">
            <button><a href="servicios.php">Volver</a></button>
        </form>
    </div>
    <footer>
        <div class="datos">
            <p>&copy; 2023 Club Campestre Puentes Reyes. Todos los derechos reservados - Bogotá D.C. - Colombia</p>
            <p>Atención al asociado: 3134180766</p>
            <p>Correo: contacto@puentesreyes.com</p>
        </div>
        <div class="redes_sociales">
            <div class="instagram">
                <a href="https://www.instagram.com/andres_pedroza_1504/">
                    <img src="https://cdn.pixabay.com/photo/2021/06/15/12/17/instagram-6338401_1280.png" alt="Instagram" width="50" height="50">Instagram
                </a>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/HelloMyFriend2020">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png" alt="Facebook" width="50" height="50">Facebook
                </a>
            </div>
        </div>
    </footer>
</body>
</html>