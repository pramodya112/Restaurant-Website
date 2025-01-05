<?php
include 'db_connection.php';

if (!isset($_GET['item_id']) || empty($_GET['item_id'])) {
    die("Item ID not provided.");
}

$item_id = intval($_GET['item_id']);

$sql = "SELECT * FROM menu_items WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $item_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $item = $result->fetch_assoc();
} else {
    die("Item not found.");
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu Item</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Edit Menu Item</h2>
        <form action="update_menu_item_process.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="item_id" value="<?php echo htmlspecialchars($item['id']); ?>">
            <div class="form-group">
                <label for="name">Item Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required><?php echo htmlspecialchars($item['description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($item['price']); ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Cuisine Type:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="srilankan.php" <?php echo $item['category'] === 'srilankan.php' ? 'selected' : ''; ?>>Sri Lankan</option>
                    <option value="indian.php" <?php echo $item['category'] === 'indian.php' ? 'selected' : ''; ?>>Indian</option>
                    <option value="chinese.php" <?php echo $item['category'] === 'chinese.php' ? 'selected' : ''; ?>>Chinese</option>
                    <option value="foodnbrev.php" <?php echo $item['category'] === 'foodnbrev.php' ? 'selected' : ''; ?>>Special Food and Beverages</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="img/menu/<?php echo htmlspecialchars($item['image']); ?>" alt="Current Image" style="width: 150px; margin-top: 10px;">
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
</body>
</html>