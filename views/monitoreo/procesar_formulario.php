<?php
require_once __DIR__ . '/../../database/conexion.php'; // Incluye el archivo de conexión

$conn = conectarBD(); // Llama a la función que retorna la conexión

// Verifica conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

// Insertar en la base de datos
$sql = "INSERT INTO registro (nombre, apellido, correo, telefono, contraseña)
        VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
