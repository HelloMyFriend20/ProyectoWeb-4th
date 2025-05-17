<?php
require_once __DIR__ . '/../database/conexion.php';

function registrarUsuario($datos) {
    $conn = conectarBD();

    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $correo = $datos['correo'];
    $telefono = $datos['telefono'];
    $contraseña = password_hash($datos['contraseña'], PASSWORD_DEFAULT);

    // Verificar si el correo ya está registrado
    $verificar = $conn->prepare("SELECT id FROM registro WHERE correo = ?");
    $verificar->bind_param("s", $correo);
    $verificar->execute();
    $verificar->store_result();

    if ($verificar->num_rows > 0) {
        $verificar->close();
        $conn->close();
        return "existe"; // Indicamos que el correo ya existe
    }
    $verificar->close();

    // Insertar nuevo usuario
    $sql = "INSERT INTO registro (nombre, apellido, correo, telefono, contraseña)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $correo, $telefono, $contraseña);

    $exito = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $exito;
}


function verificarCorreoExistente($correo) {
    $conn = conectarBD();
    $stmt = $conn->prepare("SELECT id FROM registro WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();
    $existe = $stmt->num_rows > 0;
    $stmt->close();
    $conn->close();
    return $existe;
}

function iniciarSesion($correo, $contraseñaIngresada) {
    $conn = conectarBD();

    $stmt = $conn->prepare("SELECT * FROM registro WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $usuario = null;

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($contraseñaIngresada, $usuario['contraseña'])) {
            session_start();
            $_SESSION['usuario'] = $usuario; // o podrías guardar el ID
            return true;
        }
    }

    $stmt->close();
    $conn->close();
    return false;
}

function cerrarSesion() {
    session_start();
    session_unset();
    session_destroy();
    header("Location: /ProyectoWeb-4th/index.php");
    exit;
}

function actualizarCampoPerfil($idUsuario, $campo, $valor) {
    $conn = conectarBD();

    // Validar campos permitidos
    $camposPermitidos = ['nombre', 'apellido', 'correo', 'contraseña'];
    if (!in_array($campo, $camposPermitidos)) {
        return ['exito' => false, 'mensaje' => 'Campo no permitido.'];
    }

    // Si es contraseña, la encriptamos
    if ($campo === 'contraseña') {
        $valor = password_hash($valor, PASSWORD_DEFAULT);
    }

    // Validar que el correo no esté en uso por otro usuario
    if ($campo === 'correo') {
        $stmt = $conn->prepare("SELECT id FROM registro WHERE correo = ? AND id != ?");
        $stmt->bind_param("si", $valor, $idUsuario);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->close();
            $conn->close();
            return ['exito' => false, 'mensaje' => 'Este correo ya está en uso por otro usuario.'];
        }
        $stmt->close();
    }

    // Preparar el SQL dinámicamente
    $sql = "UPDATE registro SET $campo = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        return ['exito' => false, 'mensaje' => 'Error al preparar la consulta.'];
    }

    $stmt->bind_param("si", $valor, $idUsuario);
    $exito = $stmt->execute();

    $stmt->close();
    $conn->close();

    if ($exito) {
        return ['exito' => true, 'mensaje' => "Campo '$campo' actualizado exitosamente."];
    } else {
        return ['exito' => false, 'mensaje' => 'Error al actualizar el perfil.'];
    }
}

?>
