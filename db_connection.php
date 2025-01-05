<?php
$host = 'localhost'; // Database host
$user = 'root';      // Database user
$password = '';      // Database password
$dbname = 'thegallery'; // Database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>