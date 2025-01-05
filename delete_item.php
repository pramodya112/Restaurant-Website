<?php
require 'db_connection.php';

// Check if the ID is provided
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare the delete query
    $query = "DELETE FROM menu_items WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);

    // Execute the query
    if ($stmt->execute()) {
        header('Location: manage_menu.php'); // Redirect back to the menu management page
        exit;
    } else {
        die('Error: ' . $conn->error);
    }
} else {
    die('Invalid request.');
}
?>