<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['Firstname']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($_SESSION['Email']); ?></p>
    <p>Phone: <?php echo htmlspecialchars($_SESSION['Mobilenumber']); ?></p>
    <!-- Add more user-specific content here -->
    <a href="logout.php">Logout</a>
</body>
</html>