<?php
session_start();
require 'db_connection.php'; // Adjust path as necessary

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id']; // Assuming you store user ID in session

// Fetch user profile data
$sql = 'SELECT first_name, last_name, email, mobile FROM users WHERE id = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    echo "User not found!";
    exit;
}

// Handle mobile number update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_mobile = $_POST['mobile'];
    
    // Validate the mobile number (basic validation)
    if (preg_match('/^\d{10}$/', $new_mobile)) {
        $update_sql = 'UPDATE users SET mobile = ? WHERE id = ?';
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('si', $new_mobile, $user_id);
        $update_stmt->execute();
        
        if ($update_stmt->affected_rows > 0) {
            echo '<p style="color: green;">Mobile number updated successfully!</p>';
            // Refresh profile data
            $user['mobile'] = $new_mobile;
        } else {
            echo '<p style="color: red;">Failed to update mobile number.</p>';
        }
    } else {
        echo '<p style="color: red;">Invalid mobile number. It should be a 10-digit number.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 28px;
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-info img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 5px solid #000000;
            margin-bottom: 20px;
        }
        .profile-info p {
            font-size: 18px;
            margin: 10px 0;
        }
        .profile-info p strong {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #000000;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <div class="profile-info">
            <!-- Placeholder profile picture -->
            <img src="img/profile_pic.jpg" alt="Profile Picture">
            <!-- Display user details -->
            <p><strong>First Name:</strong> <?php echo isset($user['first_name']) ? htmlspecialchars($user['first_name']) : 'Not available'; ?></p>
            <p><strong>Last Name:</strong> <?php echo isset($user['last_name']) ? htmlspecialchars($user['last_name']) : 'Not available'; ?></p>
            <p><strong>Email:</strong> <?php echo isset($user['email']) ? htmlspecialchars($user['email']) : 'Not available'; ?></p>
            <p><strong>Mobile Number:</strong> <?php echo isset($user['mobile']) ? htmlspecialchars($user['mobile']) : 'Not available'; ?></p>
            <div class="edit-form">
            <form action="" method="post">
                <label for="mobile">Edit Mobile Number:</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo htmlspecialchars($user['mobile']); ?>" required>
                <button type="submit">Update</button>
            </form>
        </div>
        
        </div>
    </div>
</body>
</html>