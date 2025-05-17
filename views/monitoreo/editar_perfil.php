<?php
session_start();
require_once __DIR__ . '/../../includes/usuarios.php';

// Verifica si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['usuario']) || !is_array($_SESSION['usuario']) || !isset($_SESSION['usuario']['id'])) {
    echo "Error: No has iniciado sesión.";
    exit;
}

$idUsuario = $_SESSION['usuario']['id'];
$campo = $_POST['campo'] ?? '';
$valor = $_POST[$campo] ?? '';

if (empty($campo) || empty($valor)) {
    echo "Faltan datos para actualizar.";
    exit;
}

// Llamar a la función para actualizar el campo en la base de datos
$resultado = actualizarCampoPerfil($idUsuario, $campo, $valor);

// Si fue exitoso y no es contraseña, actualizar también la sesión
if ($resultado['exito'] && $campo !== 'contraseña') {
    $_SESSION['usuario'][$campo] = $valor;
}

// Solo devuelve el mensaje (texto plano)
echo $resultado['mensaje'];
exit;
?>
