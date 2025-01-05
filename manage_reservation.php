<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == 'confirm') {
        $sql = "UPDATE reservations SET status='Confirmed' WHERE id=?";
    } elseif ($action == 'delete') {
        $sql = "DELETE FROM reservations WHERE id=?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Redirect to the display reservations page
header('Location: display_reservations.php');
exit;
?>