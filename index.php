<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bliss</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./logIn.css">
    
</head>

<body>
<nav class="main-nav">
    <a href="index.php" class="logo">Bliss</a>
    <button class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="nav" id="nav-menu">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <?php 
        session_start();
        if(!isset($_SESSION['user_id'])){ ?>
            <li><a href="./LogIn-Page/logIn.php">Log In</a></li>
        <?php }else { ?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Log Out</a></li>
        <?php } ?>
    </ul>
</nav>
<!-- 
    <nav class="main-nav">
        <a href="index.php" class="logo">Bliss</a>
        <ul class="nav">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <?php 
            
            session_start();

            if(!isset($_SESSION['user_id'])){ ?>
                <li><a href="./LogIn-Page/logIn.php">Log In</a></li>
            <?php }else { ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Log Out</a></li>
            <?php } ?>
        </ul>
    </nav> -->

    <section class="intro">
        <h1><a href="products.php" class="shop-now">SHOP NOW</a></h1>
        <p>Bliss is the joy and confidence you feel when you look your best. It's that inner glow of beauty.</p>
        <p> Be shining, Be glowing, Be you.</p>
    </section>    
    <section class="products">
        <h2>Bestsellers;</h2>
        <div class="product-list">
            <article class="product">
                <img src="images/summerfriday.jpg" alt="Product 1">
                <h4>Summer Fridays Lip Balm for Shine</h4>
                <p>€24.00</p>
            </article>
            <article class="product">
                <img src="images/nyxblush.jpg" alt="Product 2">
                <h4>Buttermelt Blush From Nyx Professional Makeup </h4>
                <p>€15.00</p>
            </article>
            
            <article class="product">  
                <img src="images/1.jpg" alt="Product 3">
                <h4>Maybelline Sky High Glitter Mascara</h4>
                <p>€15.50</p>
            </article>
        </div>
    </section>
 
    <section id="about-us" class="about">
        <h2><a href="aboutus.html" class="about-button">About Us</a></h2>
        <p>At Bliss, we believe beauty is about being yourself. We offer high-quality makeup that helps you feel confident.</p>
        <p>We're here to help you look and feel your best. Find your new favorites today!</p>
    </section>
    <footer>
        <p>&copy; 2024 Bliss. All rights reserved.</p>
    </footer>
</body>
</html>
<script src="responsive.js"></script>