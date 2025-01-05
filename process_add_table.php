<?php
// process_add_table.php
include 'db_connection.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table_number = $_POST['table_number'];
    $capacity = $_POST['capacity'];
    $status = $_POST['status'];

    // Prepare and execute the SQL query
    $query = "INSERT INTO tables (table_number, capacity, status) VALUES ('$table_number', '$capacity', '$status')";
    if (mysqli_query($conn, $query)) {
        echo "Table added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Redirect to the table list page or another page if needed
    // header("Location: tables.php");
    // exit();
}
?>
