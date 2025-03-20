<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud_db'; // Asegúrate de que el nombre es correcto

$conn = new mysqli($host, $user, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
