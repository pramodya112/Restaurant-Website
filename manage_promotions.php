<?php
session_start();
include 'db_connection.php'; // Ensure this file has the correct database connection details

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM promotions WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Promotion deleted successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];

        // Handle file upload
        if ($image) {
            $target_dir = "img/promotion/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "<div class='alert alert-danger'>Sorry, there was an error uploading your file.</div>";
            }
        } else {
            // Keep existing image if no new image is uploaded
            $result = $conn->query("SELECT image FROM promotions WHERE id = $id");
            $row = $result->fetch_assoc();
            $image = $row['image'];
        }

        // Update the database
        $sql = "UPDATE promotions SET title = ?, description = ?, price = ?, image = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssisi", $title, $description, $price, $image, $id);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Promotion updated successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
    }
}

// Fetch promotions
$sql = "SELECT * FROM promotions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Promotions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #ffffff;
            font-size: 1.5rem;
            text-align: center;
            padding: 1rem;
        }
        .card-body {
            padding: 1.5rem;
        }
        .form-control, .btn {
            border-radius: 0.25rem;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .alert {
            margin-bottom: 20px;
        }
        .table-container {
            margin-top: 20px;
        }
        .table td img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Manage Promotions
            </div>
            <div class="card-body">
                <?php if (!empty($errors)) { ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error) {
                            echo "<p>$error</p>";
                        } ?>
                    </div>
                <?php } ?>
                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price (LKR)</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <form action="manage_promotions.php" method="post" enctype="multipart/form-data">
                                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                                        <td><input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" class="form-control"></td>
                                        <td><textarea name="description" class="form-control" rows="3"><?php echo htmlspecialchars($row['description']); ?></textarea></td>
                                        <td><input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($row['price']); ?>" class="form-control"></td>
                                        <td>
                                            <img src="img/promotion/<?php echo htmlspecialchars($row['image']); ?>" alt="Promotion Image">
                                            <input type="file" name="image" class="form-control mt-2">
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>