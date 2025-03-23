<?php
$host = "localhost";
$dbname = "your_database_name"; // Replace with your actual database name
$username = "root"; // Default MySQL username in XAMPP
$password = ""; // Leave empty if no password is set

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
