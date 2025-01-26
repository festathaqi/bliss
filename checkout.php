<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
} else {
   
    header('Location: products.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #7f2549; 
        }

        .checkout-section {
            background-color: #f0c7d3; 
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .checkout-section h1 {
            margin-bottom: 10px;
        }

        .checkout-section p {
            font-size: 16px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        label {
            font-size: 14px;
        }

        input[type="text"],
        textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 15px;
            background-color: #7f2549;
            color: #f0c7d3;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d6a0a9;
        }
    </style>
</head>

<body>

    <div class="checkout-section">
        <h1>Checkout</h1>
        <p>Product: <?php echo htmlspecialchars($product_title); ?></p>
        <p>Price: $<?php echo htmlspecialchars($product_price); ?></p>

        <form method="POST" action="order.php">
            <input type="hidden" name="product_title" value="<?php echo htmlspecialchars($product_title); ?>">
            <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>">

            <label for="customer_first_name">First Name:</label>
            <input type="text" name="customer_first_name" id="customer_first_name" required>

            <label for="customer_last_name">Last Name:</label>
            <input type="text" name="customer_last_name" id="customer_last_name" required>

            <label for="customer_address">Address:</label>
            <textarea name="customer_address" id="customer_address" required></textarea>

            <button type="submit">Complete Purchase</button>
        </form>
    </div>

</body>

</html>
