<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../includes/usuarios.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['nombre'])) {
        // Registro
        $exito = registrarUsuario($_POST);
        
        if ($exito === "existe") {
            echo "<script>
                    alert('El correo ya está registrado.');
                    window.history.back();
                  </script>";
        } elseif ($exito) {
            echo "<script>
                    alert('Registro exitoso.');
                    window.location.href = '../../index.php'; // o a donde desees redirigir
                  </script>";
        } else {
            echo "<script>
                    alert('Error en el registro.');
                    window.history.back();
                  </script>";
        }
    } else {
        // Login
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        if (iniciarSesion($correo, $contraseña)) {
            echo "<script>
                    alert('Inicio de sesión exitoso.');
                    window.location.href = '../../index.php'; //redirige al index
                  </script>";
        } else {
            echo "<script>
                    alert('Correo o contraseña incorrectos.');
                    window.history.back();
                  </script>";
        }
    }
}
?>

