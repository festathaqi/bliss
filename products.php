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
            <div class="product-card">
                <img src="images/summerfriday.jpg" alt="Product 1">
                <h2>Summer Fridays Lip Balm for Shine</h2>
                <p>$24.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Summer Fridays Lip Balm for Shine">
                    <input type="hidden" name="product_price" value="24.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/2way_.jpg" alt="Product 2">
                <h2>Kiko Milano 3D Hydra Lipgloss</h2>
                <p>$15.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Kiko Milano 3D Hydra Lipgloss">
                    <input type="hidden" name="product_price" value="15.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/glitter.jpg" alt="Product 3">
                <h2>Kiko Unlimited Double Touch</h2>
                <p>$20.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Kiko Unlimited Double Touch">
                    <input type="hidden" name="product_price" value="20.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/oil_.jpg" alt="Product 4">
                <h2>NYX Fat Oil Lip</h2>
                <p>$15.50</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="NYX Fat Oil Lip">
                    <input type="hidden" name="product_price" value="15.50">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
        </div>

        <div class="product-container">
            <div class="product-card">
                <img src="images/1.jpg" alt="Product 5">
                <h2>Maybelline Sky High Glitter Mascara</h2>
                <p>$15.50</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Maybelline Sky High Glitter Mascara">
                    <input type="hidden" name="product_price" value="15.50">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/blue.jpg" alt="Product 6">
                <h2>Maybelline Lash Sensational Mascara</h2>
                <p>$10.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Maybelline Lash Sensational Mascara">
                    <input type="hidden" name="product_price" value="10.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/benefit.jpg" alt="Product 7">
                <h2>Benefit BADgal BANG Mascara</h2>
                <p>$25.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Benefit BADgal BANG Mascara">
                    <input type="hidden" name="product_price" value="25.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/teles.png" alt="Product 8">
                <h2>L'Oréal Paris Mascara Telescopic</h2>
                <p>$14.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="L'Oréal Paris Mascara Telescopic">
                    <input type="hidden" name="product_price" value="14.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
        </div>

        <div class="product-container">
            <div class="product-card">
                <img src="images/blushstick.jpg" alt="Product 9">
                <h2>Multi-Use Makeup Blush Stick</h2>
                <p>$22.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Multi-Use Makeup Blush Stick">
                    <input type="hidden" name="product_price" value="22.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/Rare1.1.jpg" alt="Product 10">
                <h2>Rare Beauty Soft Pinch Liquid Blush</h2>
                <p>$30.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Rare Beauty Soft Pinch Liquid Blush">
                    <input type="hidden" name="product_price" value="30.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/nyxblush.jpg" alt="Product 11">
                <h2>Nyx Buttermelt Blush</h2>
                <p>$15.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Nyx Buttermelt Blush">
                    <input type="hidden" name="product_price" value="15.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
            <div class="product-card">
                <img src="images/toofaced.jpg" alt="Product 12">
                <h2>Too Faced Born This Way Liquid Foundation</h2>
                <p>$32.00</p>
                <form method="POST" action="checkout.php">
                    <input type="hidden" name="product_title" value="Too Faced Born This Way Liquid Foundation">
                    <input type="hidden" name="product_price" value="32.00">
                    <button type="submit">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bliss. All rights reserved.</p>
    </footer>
</body>

</html>

