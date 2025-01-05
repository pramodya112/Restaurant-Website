<?php
session_start(); // Start a session

// Include the database connection file
include('db_connection.php');

// Get the email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the query
$sql = "SELECT * FROM staff WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if a user with the given email exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Store user information in the session
        $_SESSION['staff_id'] = $user['id'];
        $_SESSION['staff_name'] = $user['name'];
        $_SESSION['staff_email'] = $user['email'];
        
        // Redirect to a different page (e.g., staff dashboard)
        header('Location: staff_dashboard.php');
        exit();
    } else {
        // Invalid password
        echo "Invalid email or password.";
    }
} else {
    // No user found with the given email
    echo "Invalid email or password.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>