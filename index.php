<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Editar</a>
                    <a href='delete.php?id={$row['id']}'>Eliminar</a>
                </td>
              </tr>";
    }
    ?>
</table>
<?php include 'footer.php'; ?>