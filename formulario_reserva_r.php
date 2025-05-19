<?php
// Conexión a la base de datos
require_once 'database/conexion.php';

session_start();
$conn = conectarBD();
$restaurantes = [];

// Obtener lista de restaurantes
$result = $conn->query("SELECT nombre FROM restaurantes");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $restaurantes[] = $row['nombre'];
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
    <title>Reservar restaurantes</title>
</head>
<body>
    <div class="sesion">
        <form action="guardar_reserva.php" method="POST">
            <h1>Reserva restaurante</h1><br>

            <p>Reserva a nombre de: <strong><?php echo htmlspecialchars($nombre . ' ' . $apellido); ?></strong></p><br><br>

            <label for="fecha">Fecha de reserva:</label>
            <input type="date" name="fecha" required><br><br>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" required><br><br>

            <label for="personas">Número de personas:</label>
            <input type="number" name="personas" required min="1"><br>

            <label for="restaurante">Seleccione el restaurante:</label>
            <select name="restaurante" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($restaurantes as $nombre_rest): ?>
                    <option value="<?php echo htmlspecialchars($nombre_rest); ?>">
                        <?php echo htmlspecialchars($nombre_rest); ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <input type="submit" value="Reservar">
            <button class="btn-volver" type="button" onclick="location.href='restaurantes.php'">Volver</button>
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
