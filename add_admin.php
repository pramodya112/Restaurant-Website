<?php
// add_admin.php

include 'db_connection.php'; // Include your database connection file

// Pre-defined admin credentials
$email = 'adminmail@gmail.com'; // Change to your admin email
$password = password_hash('adminpswrd', PASSWORD_BCRYPT); // Change to your admin password

// Check if the admin already exists
$sql_check = "SELECT * FROM admin_table WHERE email = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows == 0) {
    // Insert admin credentials
    $sql = "INSERT INTO admin_table (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "Admin added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Admin with this email already exists.";
}

$stmt_check->close();
$conn->close();
?>