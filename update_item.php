<?php
session_start();
require 'db_connection.php';

// Fetch item details
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM menu_items WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $item = mysqli_fetch_assoc($result);
} else {
    die('Item ID not specified.');
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    
    // Handle file upload
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], "img/menu/$image");
    } else {
        $image = $item['image']; // Keep existing image if no new file is uploaded
    }

    $update_query = "UPDATE menu_items SET name='$name', description='$description', price='$price', category='$category', image='$image' WHERE id=$id";
    if (mysqli_query($conn, $update_query)) {
        header('Location: manage_menu.php');
        exit();
    } else {
        die('Error updating item: ' . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Menu Item</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="file"] {
            border: none;
        }
        img {
            display: block;
            margin-top: 10px;
            max-width: 150px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container">
    <h1>Update Menu Item</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required><?php echo htmlspecialchars($item['description']); ?></textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="<?php echo htmlspecialchars($item['price']); ?>" required>
        </div>
        <div>
            <label for="category">Category</label>
            <input type="text" name="category" id="category" value="<?php echo htmlspecialchars($item['category']); ?>" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <img src="img/menu/<?php echo htmlspecialchars($item['image']); ?>" alt="Current Image">
        </div>
        <div>
            <button type="submit">Update Item</button>
        </div>
    </form>
</div>
</body>
</html>