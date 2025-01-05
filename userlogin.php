<?php
include("db_connection.php");
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        header("Location: login.php");
        exit();
    }
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM usertable WHERE Email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result_user = $stmt->get_result();

    if ($result_user->num_rows > 0) {
        $row = $result_user->fetch_assoc();
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lastname'] = $row['Lastname'];
        $_SESSION['Mobilenumber'] = $row['Mobilenumber'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['loggedin'] = true;

        // Redirect to the user profile page
        $redirect_page = isset($_SESSION['redirect_page']) ? $_SESSION['redirect_page'] : 'userprofile.php';
        unset($_SESSION['redirect_page']);
        header("Location: $redirect_page");
        exit();
    } else {
        // Check for admin credentials
        $stmt_admin = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
        $stmt_admin->bind_param("ss", $email, $password);
        $stmt_admin->execute();
        $result_admin = $stmt_admin->get_result();

        if ($result_admin->num_rows > 0) {
            $row = $result_admin->fetch_assoc();
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Mobilenumber'] = $row['Mobilenumber'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['loggedin'] = true;

            // Redirect to the admin profile page
            header("Location: adminprofile.php");
            exit();
        } else {
            // Redirect back to login if credentials are invalid
            header("Location: login.php");
            exit();
        }
    }
} else {
    // Redirect to login if no post data
    header("Location: login.php");
    exit();
}
?>