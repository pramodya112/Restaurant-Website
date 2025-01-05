<?php
session_start();
require 'db_connection.php'; // Ensure you include your database connection

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Process the order confirmation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Calculate total price from the cart
    $total_price = 0;
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total_price += $item['price'] * $item['quantity'];
        }
    } else {
        die("Cart is empty or not set.");
    }

    // Generate a unique order number
    $order_number = uniqid('ORD');

    // Check if user is logged in
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

    // Prepare SQL to insert the order
    $stmt = $conn->prepare("INSERT INTO orders (order_number, total_price, order_date, status) VALUES (?, ?, NOW(), 'Pending')");
    if (!$stmt) {
        die("Failed to prepare statement: " . $conn->error);
    }

    // Bind parameters: 's' for string (order_number) and 'd' for double (total_price)
    if (!$stmt->bind_param("sd", $order_number, $total_price)) {
        die("Failed to bind parameters: " . $stmt->error);
    }
    
    // Execute the statement
    if (!$stmt->execute()) {
        die("Failed to execute statement: " . $stmt->error);
    }
    $order_id = $stmt->insert_id; // Get the newly inserted order ID
    $stmt->close();

    // Prepare SQL to insert the order items
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, item_name, item_price, quantity) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Failed to prepare statement: " . $conn->error);
    }

    foreach ($_SESSION['cart'] as $item) {
        // Bind parameters: 'i' for integer (order_id), 's' for string (item_name), 'd' for double (item_price), 'i' for integer (quantity)
        if (!$stmt->bind_param("isdi", $order_id, $item['name'], $item['price'], $item['quantity'])) {
            die("Failed to bind parameters: " . $stmt->error);
        }
        // Execute the statement
        if (!$stmt->execute()) {
            die("Failed to execute statement: " . $stmt->error);
        }
    }
    $stmt->close();

    // Clear the cart
    $_SESSION['cart'] = [];
    $_SESSION['total_price'] = 0;

    // Generate and display the invoice
    echo "<h1>Invoice</h1>";

    // Fetch order details
    $stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
    if (!$stmt) {
        die("Failed to prepare statement: " . $conn->error);
    }
    if (!$stmt->bind_param("i", $order_id)) {
        die("Failed to bind parameters: " . $stmt->error);
    }
    if (!$stmt->execute()) {
        die("Failed to execute statement: " . $stmt->error);
    }
    $order_result = $stmt->get_result();
    $order = $order_result->fetch_assoc();
    $stmt->close();

    if (!$order) {
        die("Failed to fetch order details.");
    }

    echo "<h2>Order Details</h2>";
    echo "<p>Order Number: " . htmlspecialchars($order['order_number']) . "</p>";
    echo "<p>Total Price: Rs. " . number_format($order['total_price'], 2) . "</p>";
    echo "<p>Order Date: " . htmlspecialchars($order['order_date']) . "</p>";

    // Fetch order items
    $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
    if (!$stmt) {
        die("Failed to prepare statement: " . $conn->error);
    }
    if (!$stmt->bind_param("i", $order_id)) {
        die("Failed to bind parameters: " . $stmt->error);
    }
    if (!$stmt->execute()) {
        die("Failed to execute statement: " . $stmt->error);
    }
    $items_result = $stmt->get_result();

    echo "<h2>Order Items</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Item Name</th><th>Item Price</th><th>Quantity</th><th>Total</th></tr>";
    while ($item = $items_result->fetch_assoc()) {
        $item_total = $item['item_price'] * $item['quantity'];
        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['item_name']) . "</td>";
        echo "<td>Rs. " . number_format($item['item_price'], 2) . "</td>";
        echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
        echo "<td>Rs. " . number_format($item_total, 2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No order to confirm.</p>";
}
?>