<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Hotel</title>
    <link rel="stylesheet" href="home.css">
    <!-- Include jQuery --> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom jQuery script -->
    <script src="slider.js"></script>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <h1>ABC Hotel</h1>
        <nav class="nav-bar">
            <a href="home.php">Home</a>
            <a href="price-check.html">Price Check</a>
            <a href="loginPage.html">Logout</a>
            
        </nav>
    </header>

    <!-- Main Content -->
    <div class="content">
        <!-- Banner Slider -->
        <div class="banner-slider">
            <div class="slide">
                <img src="banner1.jpg" alt="Banner 1">
            </div>
            <div class="slide">
                <img src="banner2.jpg" alt="Banner 2">
            </div>
            <div class="slide">
                <img src="banner3.jpg" alt="Banner 3">
            </div>
        </div>

        <!-- Hotel Profile Section -->
        <section class="hotel-profile">
            <h2>Hotel Profile</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </section>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <p>Website Footer</p>
    </footer>
</body>
</html>