<?php
include("db_connection.php");
session_start(); // Start the session if needed

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "You need to log in to submit a review.";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate data (basic validation)
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        try {
            // Prepare and execute SQL statement
            $sql = "INSERT INTO reviews (name, email, subject, message) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $email, $subject, $message);

            if ($stmt->execute()) {
                echo "<script>
                alert('Thank you for your message!!');
                window.location.href = 'submit_form.php.php?status=success';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href = 'submit_form.php?status=error';
              </script>";
    }


            $stmt->close();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage(); // Output error message for debugging
        }
    } else {
        echo "Please fill in all fields.";
    }
}

$conn->close();
?> 