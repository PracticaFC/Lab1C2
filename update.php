<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
?>
<form method="POST" action="update_process.php">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
    <input type="number" name="age" value="<?php echo $user['age']; ?>" required>
    <button type="submit">Actualizar</button>
</form>
<?php include 'footer.php'; ?>