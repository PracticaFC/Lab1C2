<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";
    $conn->query($sql);
    header("Location: index.php");
}
?>