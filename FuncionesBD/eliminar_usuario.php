<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM registro WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente. <a href='index.php'>Volver</a>";
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
?>