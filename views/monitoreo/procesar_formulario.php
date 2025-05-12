<?php
require_once __DIR__ . '/../../database/conexion.php';

$conn = conectarBD();

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si el formulario tiene el campo "nombre", es registro
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO registro (nombre, apellido, correo, telefono, contraseña)
                VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$contraseña')";

        if ($conn->query($sql) === TRUE) {
            echo "✅ Registro exitoso.";
        } else {
            echo "❌ Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        // Inicio de sesión
        $correo = $_POST['correo'];
        $contraseñaIngresada = $_POST['contraseña'];

        $stmt = $conn->prepare("SELECT * FROM registro WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($contraseñaIngresada, $usuario['contraseña'])) {
                echo "✅ Inicio de sesión exitoso. ¡Bienvenido, " . $usuario['nombre'] . "!";
                // header("Location: dashboard.php"); // <-- Descomenta para redirigir
            } else {
                echo "⚠️ Contraseña incorrecta.";
            }
        } else {
            echo "❌ El usuario no existe.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
