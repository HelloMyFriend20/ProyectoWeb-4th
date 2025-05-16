<?php
// Asegura que la sesión siempre esté iniciada
function iniciarSesion() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// Verifica si el usuario tiene sesión iniciada
function verificarSesion() {
    iniciarSesion();
    if (!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit();
    }
}

// Cierra sesión de forma segura
function cerrarSesion() {
    iniciarSesion();
    session_unset(); // Elimina variables de sesión
    session_destroy(); // Elimina la sesión
    header("Location: login.php"); // Redirige al login
    exit();
}

// Devuelve el nombre o ID del usuario conectado
function obtenerUsuarioActual() {
    iniciarSesion();
    return $_SESSION['usuario'] ?? null;
}
?>
