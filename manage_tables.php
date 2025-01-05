<?php
session_start(); // Start the session at the beginning of the file
 // Include the header file
include 'db_connection.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>The Gallery Café</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- Include other meta tags, stylesheets, and scripts -->

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .form-container {
        margin: 20px auto;
        width: 50%;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f4f4f4;
    }
    .btn {
        padding: 8px 12px;
        margin: 5px;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }
    .btn-update {
        background-color: #4CAF50;
    }
    .btn-update:hover {
        background-color: #45a049;
    }
    .btn-delete {
        background-color: #f44336;
    }
    .btn-delete:hover {
        background-color: #e53935;
    }
</style>
</head>

<body>

<div class="container">
    <h1>Manage Table Details</h1>

    <?php
    // Handle table update
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $id = intval($_POST['id']);
        $table_number = $_POST['table_number'];
        $capacity = $_POST['capacity'];
        $status = $_POST['status'];

        $query = "UPDATE tables SET table_number = '$table_number', capacity = '$capacity', status = '$status' WHERE id = $id";
        if (mysqli_query($conn, $query)) {
            echo "<p>Table updated successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Handle table deletion
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
        $id = intval($_POST['id']);

        $query = "DELETE FROM tables WHERE id = $id";
        if (mysqli_query($conn, $query)) {
            echo "<p>Table deleted successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Fetch table details from the database
    $query = "SELECT id, table_number, capacity, status FROM tables";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead><tr><th>Table Number</th><th>No. of People</th><th>Status</th><th>Actions</th></tr></thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['table_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['capacity']) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "<td>";
            echo "<form method='post' action='manage_tables.php' style='display:inline;'>";
            echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
            echo "<input type='text' name='table_number' value='" . htmlspecialchars($row['table_number']) . "' required>";
            echo "<input type='number' name='capacity' value='" . htmlspecialchars($row['capacity']) . "' required>";
            echo "<select name='status'>";
            echo "<option value='Available'" . ($row['status'] == 'Available' ? ' selected' : '') . ">Available</option>";
            echo "<option value='Reserved'" . ($row['status'] == 'Reserved' ? ' selected' : '') . ">Reserved</option>";
            echo "</select>";
            echo "<input type='submit' name='update' value='Update' class='btn btn-update'>";
            echo "<input type='submit' name='delete' value='Delete' class='btn btn-delete'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No tables available.</p>";
    }
    ?>
</div>

<!-- Footer and JavaScript includes -->
</body>

</html>