<?php
require_once __DIR__ . '/../../includes/usuarios.php';

if (isset($_GET['accion']) && $_GET['accion'] === 'cerrar_sesion') {
    cerrarSesion();
}
?>