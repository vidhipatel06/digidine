<?php
$host = '127.0.0.1'; // use IP instead of 'localhost' to avoid socket issues
$port = 3308;
$db = 'menu_scanner';
$user = 'root';
$pass = ''; // if no password

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
