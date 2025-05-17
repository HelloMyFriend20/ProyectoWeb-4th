<?php
session_start();
require_once __DIR__ . '/../../includes/usuarios.php';

// Verifica que la sesión esté activa y tenga datos del usuario
if (!isset($_SESSION['usuario']) || !isset($_SESSION['usuario']['id'])) {
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

// Llamar función para actualizar
$resultado = actualizarCampoPerfil($idUsuario, $campo, $valor);

// Actualizar sesión si no es contraseña
if ($resultado['exito'] && $campo !== 'contraseña') {
    $_SESSION['usuario'][$campo] = $valor;
}

// Mostrar mensaje
echo "<p>" . $resultado['mensaje'] . "</p>";
echo '<a href="editar_perfil.html">Volver</a>';
?>
