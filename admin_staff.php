<?php
$servername = "localhost";
$username = "root";
$password = ""; // Update this with the correct password for MySQL
$dbname = "thegallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for adding staff
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_staff'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO staff (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New staff member added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle staff update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_staff'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE staff SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Staff member updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle staff delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    $sql = "DELETE FROM staff WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Staff member deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch staff members for displaying
$staff_sql = "SELECT * FROM staff";
$staff_result = $conn->query($staff_sql);

// Close connection after fetching staff data
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Staff Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Admin Staff Management</h1>

    <!-- Form to Add New Staff Member -->
    <h2>Add New Staff Member</h2>
    <form action="admin_staff.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="add_staff">Add Staff</button>
    </form>

    <!-- List of Staff Members -->
    <h2>Staff Members</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($staff_result->num_rows > 0): ?>
                <?php while ($staff = $staff_result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $staff['id']; ?></td>
                        <td><?php echo $staff['name']; ?></td>
                        <td><?php echo $staff['email']; ?></td>
                        <td>
                            <a href="admin_staff.php?update=<?php echo $staff['id']; ?>">Update</a> |
                            <a href="admin_staff.php?delete=<?php echo $staff['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No staff members found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Form to Update Existing Staff Member -->
    <?php
    if (isset($_GET['update'])):
        $id = $_GET['update'];
        
        // Re-open connection for update functionality
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $update_sql = "SELECT * FROM staff WHERE id=$id";
        $update_result = $conn->query($update_sql);
        $update_staff = $update_result->fetch_assoc();
    ?>
        <h2>Update Staff Member</h2>
        <form action="admin_staff.php" method="post">
            <input type="hidden" name="id" value="<?php echo $update_staff['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $update_staff['name']; ?>" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $update_staff['email']; ?>" required><br><br>

            <button type="submit" name="update_staff">Update Staff</button>
        </form>
    <?php endif; ?>

</body>
</html>