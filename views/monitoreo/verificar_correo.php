<?php
require_once __DIR__ . '/../../includes/usuarios.php';

if (isset($_GET['correo'])) {
    $correo = $_GET['correo'];

    // Usamos la función que ya tienes
    echo verificarCorreoExistente($correo) ? 'existe' : 'no_existe';
}
?>
