<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thegallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $datetime = $_POST["datetime"];
    $select1 = $_POST["select1"];
    $message = $_POST["message"];

    $sql = "INSERT INTO reservations (Name, Email, datetime, people, message) VALUES ('$name', '$email', '$datetime', '$select1', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>