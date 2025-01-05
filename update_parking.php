<?php
include 'db_connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $space_number = $_POST['space_number'];
    $is_available = isset($_POST['is_available']) ? 1 : 0;

    // Update parking space
    $query = "UPDATE parking_spaces SET is_available = ? WHERE space_number = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'is', $is_available, $space_number);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("Location: manage_parking.php"); // Redirect to the manage parking page
        exit();
    } else {
        echo "No changes made or error occurred.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>