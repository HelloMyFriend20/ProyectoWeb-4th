<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Usuarios y Reservas</title>
    <link rel="stylesheet" href="stylesbd.css">
</head>
<body>
<h1>Lista de Usuarios con Reservas (Restaurantes)</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Total Reservas</th>
        <th>Acciones</th>
    </tr>

<?php
$sql = "
    SELECT r.id, r.nombre, r.apellido, r.correo, COUNT(rr.id_reserva) AS total_reservas
    FROM registro r
    LEFT JOIN reservas_restaurantes rr ON r.id = rr.id_usuario
    GROUP BY r.id
    HAVING total_reservas >= 0
";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()):
?>
    <tr>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['apellido'] ?></td>
        <td><?= $row['correo'] ?></td>
        <td><?= $row['total_reservas'] ?></td>
        <td><a href="eliminar_usuario.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</a></td>
    </tr>
<?php endwhile; ?>
</table>

</body>
</html>