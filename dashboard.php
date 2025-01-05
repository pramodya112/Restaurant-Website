<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$user_type = $_SESSION['user_type'];

if ($user_type === 'admin') {
    // Admin-specific code
} elseif ($user_type === 'staff') {
    // Staff-specific code
} elseif ($user_type === 'user') {
    // User-specific code
}
?>