<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Update quantity or remove item from cart
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_quantity'])) {
        foreach ($_POST['quantities'] as $key => $quantity) {
            if ($quantity <= 0) {
                unset($_SESSION['cart'][$key]);
            } else {
                $_SESSION['cart'][$key]['quantity'] = $quantity;
            }
        }
    }

    if (isset($_POST['remove_item'])) {
        $key = $_POST['item_key'];
        unset($_SESSION['cart'][$key]);
    }

    // Recalculate total price
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }
} else {
    // Calculate total price on initial load
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

    <script>
        function updateTotalPrice() {
            let totalPrice = 0;
            document.querySelectorAll('.item').forEach(function(itemRow) {
                const price = parseFloat(itemRow.querySelector('.price').innerText.replace('Rs. ', ''));
                const quantity = parseInt(itemRow.querySelector('.quantity').value);
                const itemTotal = price * quantity;
                itemRow.querySelector('.item-total').innerText = 'Rs. ' + itemTotal.toFixed(2);
                totalPrice += itemTotal;
            });
            document.getElementById('total_price').innerText = 'Rs. ' + totalPrice.toFixed(2);
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Your Order</h1>

        <?php if (count($_SESSION['cart']) > 0) : ?>
            <form method="post" action="order.php" onsubmit="updateTotalPrice()">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $key => $item) : ?>
                            <tr class="item">
                                <td><?php echo htmlspecialchars($item['name']); ?></td>
                                <td class="price">Rs. <?php echo htmlspecialchars($item['price']); ?></td>
                                <td>
                                    <input type="number" name="quantities[<?php echo $key; ?>]" value="<?php echo htmlspecialchars($item['quantity']); ?>" min="1" class="form-control quantity" onchange="updateTotalPrice()">
                                </td>
                                <td class="item-total">Rs. <?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                                <td>
                                    <button type="submit" name="remove_item" value="Remove" class="btn btn-danger">Remove</button>
                                    <input type="hidden" name="item_key" value="<?php echo $key; ?>">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <h3>Total Price: <span id="total_price">Rs. <?php echo number_format($total_price, 2); ?></span></h3>
                <button type="submit" name="update_quantity" value="Update" class="btn btn-primary">Update Quantities</button>
                <a href="menu.php" class="btn btn-primary">Add More Items</a>
                <a href="checkout.php" class="btn btn-success">Checkout</a>
                <button type="submit" formaction="confirm_order.php" class="btn btn-warning">Confirm Order</button>
            </form>
        <?php else : ?>
            <h3>Total Price: Rs. <?php echo number_format($total_price, 2); ?></h3>
            <p>Your cart is empty. <a href="menu.php">Go to Menu</a></p>
            <a href="menu.php" class="btn btn-primary">Add New Items</a>
        <?php endif; ?>
    </div>
</body>
</html>