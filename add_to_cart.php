<?php
session_start();
require 'db_connection.php';

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']); // Adjust this based on your session setup
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isLoggedIn()) {
        $itemId = $_POST['id'];

        // Ensure cart is initialized
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Fetch item details from the database
        $stmt = $conn->prepare("SELECT name, price FROM menu_items WHERE id = ?");
        $stmt->bind_param("i", $itemId);
        $stmt->execute();
        $stmt->bind_result($itemName, $itemPrice);
        $stmt->fetch();
        $stmt->close();

        // Add item to the cart
        if (isset($itemName)) {
            if (isset($_SESSION['cart'][$itemId])) {
                $_SESSION['cart'][$itemId]['quantity'] += 1; // Increase quantity if item already in cart
            } else {
                $_SESSION['cart'][$itemId] = array(
                    'id' => $itemId,
                    'name' => $itemName,
                    'price' => $itemPrice,
                    'quantity' => 1
                );
            }
        }

        // Redirect to the order page
        header('Location: order.php');
        exit();
    } else {
        // Redirect to login page if not logged in
        header('Location: login.php');
        exit();
    }
}