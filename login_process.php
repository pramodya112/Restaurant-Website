<?php
session_start();

// Include the database connection script
require_once 'db_connection.php'; // Adjust the path if necessary

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    // Redirect to the default page if already logged in
    header("Location: srilankan.php");
    exit();
}

// Initialize error variable
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if a user with this email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $first_name, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $first_name;

            // Redirect to the page where the user was
            $redirect_page = isset($_SESSION['redirect_page']) ? $_SESSION['redirect_page'] : 'srilankan.php';
            unset($_SESSION['redirect_page']);
            header("Location: $redirect_page");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with this email.";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Your existing styles here */
    </style>
</head>
<body>
<div class="wrapper">
    <div class="logo">
        <img src="img/logo2.jpg" alt="">
    </div>
    <div class="text-center mt-4 name">
        The Gallery Café
    </div>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="registration.php">Sign up</a>
    </div>
    <?php if (!empty($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
</div>
</body>
</html>