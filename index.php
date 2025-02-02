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
    <link rel="stylesheet" href="./logIn.css">
    
</head>

<body>
<nav class="main-nav">
    <a href="index.php" class="logo">Bliss</a>
    <ul class="nav" id="nav-menu">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
        <?php 
            session_start();
            if(!isset($_SESSION['user_id'])){ ?>
                <li><a href="./LogIn-Page/logIn.php">Log In</a></li>
        <?php } else { 
            if ($_SESSION['user_role'] === 'admin') { ?>
                <li><a href="dashboard.php">Dashboard</a></li>
            <?php } ?>
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

    <section class="bestsellers">
        <h2>Products</h2>
        <div class="slider-container">
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <div class="slider">
                <!-- Loop through the bestsellers -->
                <?php foreach ($products as $product) { ?>
                    <div class="product">
                        <img src="images/<?php echo htmlspecialchars($product['image_path']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                        <p class="price">€<?php echo number_format($product['price'], 2); ?></p>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                <?php } ?>
            </div>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
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

<script>
  let currentIndex = 0;
const slideIntervalTime = 3000; 
let interval; 
function moveSlide(step) {
    const slider = document.querySelector('.slider');
    const products = document.querySelectorAll('.product');
    const totalSlides = products.length;
    const visibleSlides = 3; 

    currentIndex += step;

    
    if (currentIndex < 0) {
        currentIndex = totalSlides - visibleSlides; 
    } else if (currentIndex > totalSlides - visibleSlides) {
        currentIndex = 0; 
    }

    slider.style.transform = `translateX(${-currentIndex * 33.33}%)`;

    toggleButtonsVisibility();
}

function toggleButtonsVisibility() {
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const products = document.querySelectorAll('.product');
    const totalSlides = products.length;
    const visibleSlides = 3;

    prevButton.style.display = currentIndex === 0 ? 'none' : 'block';

    nextButton.style.display = currentIndex >= totalSlides - visibleSlides ? 'none' : 'block';
}

function startAutoSlide() {
    interval = setInterval(() => {
        moveSlide(1); 
    }, slideIntervalTime);
}

function stopAutoSlide() {
    clearInterval(interval); 
}

function handleBuyNowClick(event) {
    window.location.href = 'checkout.php'; 
}

document.querySelectorAll('.product').forEach((product) => {
    const buyButton = product.querySelector('button'); 

   
    product.addEventListener('mouseenter', stopAutoSlide);
    buyButton.addEventListener('mouseenter', stopAutoSlide);

   
    product.addEventListener('mouseleave', startAutoSlide);
    buyButton.addEventListener('mouseleave', startAutoSlide);

    buyButton.addEventListener('click', handleBuyNowClick);
});

document.addEventListener("DOMContentLoaded", function () {
    toggleButtonsVisibility(); 
    startAutoSlide(); 
});


</script>
</html>
<script src="responsive.js"></script>