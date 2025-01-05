<?php
include 'db_connection.php';

if (!isset($_GET['order_number'])) {
    echo "Order number not provided.";
    exit;
}

$order_number = $_GET['order_number'];
echo "Order Number Received: " . htmlspecialchars($order_number) . "<br>";

// Fetch order details from the database
$sql = "SELECT * FROM orders WHERE order_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $order_number);
$stmt->execute();
$order_result = $stmt->get_result();

if ($order_result->num_rows === 0) {
    echo "Order not found.";
    exit;
}

$order_details = $order_result->fetch_assoc();

// Fetch order items from the database
$sql = "SELECT * FROM order_items WHERE order_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $order_details['id']);
$stmt->execute();
$order_items_result = $stmt->get_result();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Details</title>
</head>

<body>
    <div class="container">
        <h1>Order Details</h1>
        <p>Order Number: <strong><?php echo htmlspecialchars($order_details['order_number']); ?></strong></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = $order_items_result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                        <td>Rs. <?php echo htmlspecialchars($item['item_price']); ?></td>
                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                        <td>Rs. <?php echo number_format($item['item_price'] * $item['quantity'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <h3>Total Price: Rs. <?php echo number_format($order_details['total_price'], 2); ?></h3>
        <a href="menu.php" class="btn btn-primary">Go to Menu</a>
    </div>
</body>

</html>