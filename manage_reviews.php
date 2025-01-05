<?php
include("db_connection.php");
session_start();

// Check if a delete request is made
if (isset($_POST['delete_review'])) {
    $id = intval($_POST['review_id']);

    // Prepare and execute SQL statement to delete the review
    $sql = "DELETE FROM reviews WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<p>Review deleted successfully.</p>";
    } else {
        echo "<p>Error deleting review: " . $conn->error . "</p>";
    }

    $stmt->close();
}

// Fetch reviews from the database
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reviews - The Gallery Café</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS file -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 5px 10px;
            color: white;
            background-color: red;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Reviews</h1>
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['subject'] . "</td>
                        <td>" . $row['message'] . "</td>
                        <td>
                            <form method='post' action=''>
                                <input type='hidden' name='review_id' value='" . $row['id'] . "'>
                                <button type='submit' name='delete_review'>Delete</button>
                            </form>
                        </td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No reviews found.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>