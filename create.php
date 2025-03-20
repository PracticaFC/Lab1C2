<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<form method="POST" action="store.php">
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="number" name="age" placeholder="Edad" required>
    <button type="submit">Guardar</button>
</form>
<?php include 'footer.php'; ?>