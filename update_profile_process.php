<?php
session_start();
include 'db_connection.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Retrieve and validate form data
$user_id = $_SESSION['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password if it's provided
if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET first_name = ?, last_name = ?, mobile = ?, email = ?, password = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$first_name, $last_name, $mobile, $email, $hashed_password, $user_id]);
} else {
    $sql = "UPDATE users SET first_name = ?, last_name = ?, mobile = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$first_name, $last_name, $mobile, $email, $user_id]);
}

header("Location: profile.php");
exit();
?>