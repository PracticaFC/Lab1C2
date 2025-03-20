<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    
    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";
    $conn->query($sql);
    header("Location: index.php");
}
?>