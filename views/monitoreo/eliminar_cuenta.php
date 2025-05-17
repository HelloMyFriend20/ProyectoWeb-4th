<?php
session_start();
require_once __DIR__ . '/../../includes/usuarios.php';

if (!isset($_SESSION['usuario']['id'])) {
    echo "Error: No has iniciado sesión.";
    exit;
}

$idUsuario = $_SESSION['usuario']['id'];
$resultado = eliminarCuentaUsuario($idUsuario);

echo $resultado['mensaje'];
?>
