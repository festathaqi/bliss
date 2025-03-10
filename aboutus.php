<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bliss</title>
    <link rel="stylesheet" href="about.css">
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
    <div class="contact-section">
        <h1>Contact Us</h1>
        <form action="contact_process.php" method="POST" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
    
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
    
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="about-section">
        <h1>About Us</h1>
        <p class="intro-text"></p>

        <div class="about-container">
            <div class="about-card">
                <img src="images/makeuptut.jpg" alt="Our Mission">
                <h2>Our Mission</h2>
                <p>Bliss is where beauty meets confidence.
                    We believe that makeup is more than just a routine, it is an art of self-expression. We know that beauty comes in many shades and preferences, so we make it a priority to offer products that work for everyone. We sell affordable, high-quality makeup to boost your confidence and highlight your unique beauty. Thank you for choosing Bliss to be a part of your story. </p>
            </div>
            <div class="about-card">
                <img src="images/girlsss1.jpg" alt="Our Vision">
                <h2>Our Best for You</h2>
                <p>Now that you're here, take a look around, discover your new favorites and let us help you look and feel your best every day. From the latest trends to timeless classics, you’re just a few clicks away from discovering what makes you shine.
                    <img src="images/products.jpg" alt="Our Vision">
                </p>
            </div>
            <div class="about-card">
                <img src="images/makeuptut.jpg" alt="Our Clients">
                <h2>Our Clients</h2>
                <p>We focus on being honest, making sure every client feels satisfied and special. We take pride in delivering great service and building strong connections.  </p>
            </div>
        </div>

      
        
    </div>

    
    <footer>
        <p>&copy; 2024 Bliss. All rights reserved.</p>
    </footer>
</body>
<script src="contactValidation.js"></script>

</html>
