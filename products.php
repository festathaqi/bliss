<?php

require_once 'database.php';

$sql = "SELECT * FROM products";
$products = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bliss</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="main-nav">
        <a href="index.php" class="logo">Bliss</a>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="products.php" class="active">Products</a></li>
            <li><a href="./LogIn-Page/logIn.php">Log In</a></li>
        </ul>
    </nav>

    <div class="product-section">
        <h1>Our Products</h1>
        <div class="product-container">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="images/<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                    <p>$<?php echo number_format($product['price'], 2); ?></p>
                    <form method="POST" action="checkout.php">
                        <input type="hidden" name="product_title" value="<?php echo htmlspecialchars($product['name']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo number_format($product['price'], 2); ?>">
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bliss. All rights reserved.</p>
    </footer>
</body>

</html>

