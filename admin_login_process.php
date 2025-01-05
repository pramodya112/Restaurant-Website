<?php
session_start(); // Start the session

// Include database connection
include 'db_connection.php';

// Get user input from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL query to check the credentials
$sql = "SELECT * FROM admin_table WHERE email = ? AND password = ?";

// Initialize a statement
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing the SQL statement: " . $conn->error);
}

// Bind parameters and execute
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Fetch the admin data
    $admin = $result->fetch_assoc();

    // Set session variables
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['admin_email'] = $admin['Email'];

    // Redirect to admin panel
    header("Location: pannel.php");
    exit();
} else {
    // Incorrect credentials
    echo "Invalid email or password.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>