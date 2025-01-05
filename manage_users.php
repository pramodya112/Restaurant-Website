<?php
// Include database connection
include 'db_connection.php';

// Handle update request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $userId = $_POST['user_id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider hashing this password

    $sql = "UPDATE users SET first_name=?, last_name=?, mobile=?, email=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssi', $firstName, $lastName, $mobile, $email, $password, $userId);

    if ($stmt->execute()) {
        echo "<script>
                alert('User Updated Successfully!!');
                window.location.href = 'manage_users.php.php?status=success';
              </script>";
    } else {
        echo "<script>
                alert('Error updating user: " . $stmt->error . "');
                window.location.href = 'manage_users.php?status=error';
              </script>";
    }
}

// Handle delete request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $userId = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $userId);

    if ($stmt->execute()) {
        echo "<script>
                alert('User deleted Successfully!!');
                window.location.href = 'manage_users.php.php?status=success';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href = 'manage_users.php?status=error';
              </script>";
    }
}

// Fetch all users
$sql = "SELECT id, first_name, last_name, mobile, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <style>
        /* Your CSS here */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            margin: 2px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #4CAF50;
        }
        .edit-btn:hover {
            background-color: #45a049;
        }
        .delete-btn {
            background-color: #f44336;
        }
        .delete-btn:hover {
            background-color: #e53935;
        }
        .form-container {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Manage Users</h1>

    <!-- List of Users -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <form action="manage_users.php" method="post" style="display:inline;">
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="edit" class="btn edit-btn">Edit</button>
                        </form>
                        <form action="manage_users.php" method="post" style="display:inline;">
                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete" class="btn delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Update User Form (Visible when Edit button is clicked) -->
    <?php if (isset($_POST['edit'])): ?>
        <?php
        $userId = $_POST['user_id'];
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $userId);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        ?>
        <div class="form-container">
            <h2>Update User</h2>
            <form action="manage_users.php" method="post">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" required><br><br>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" required><br><br>

                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $user['mobile']; ?>" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit" name="update" class="btn edit-btn">Update User</button>
            </form>
        </div>
    <?php endif; ?>

    <!-- Close the database connection -->
    <?php $conn->close(); ?>
</body>
</html>