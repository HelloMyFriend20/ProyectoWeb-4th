<?php
function conectarBD() {
    $conn = new mysqli("localhost", "root", "", "puentesreyes");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>