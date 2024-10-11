<?php 
   session_start();

   include("php/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILIPINOCUISINE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="home">
        <img src="images/logo.png" alt="bowl">
        <nav>        
            <ul>
                <li><a class="btn" href="home.php">Home</a></li>
                <li><a class="btn" href="#about">About</a></li>
                <li><a class="btn" href="#categories">Categories</a></li>
                <li><a class="btn" id="login" href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="menu-section">
            <div class="menu-image">
                <img src="images/home.jpg" alt="foods">
                <div class="menu-about">
                    <p>WELCOME TO</p>
                    <h1>FILIPINO CUISINE</h1>
                    <p>Browse your favorite Filipino foods.</p>
                </div>
            </div>
        </section>

        <div class="menu-contact" id="about">
            <h2><b>ABOUT</b></h2>
        </div>

        <section class="about-section" >
            <div class="about-food">
                <div class="about-description">
                    <h2>BROWSE FOR BEST FILIPINO RECIPES HERE</h2>
                    <p>At FILIPINOCUISINE, we're passionate about celebrating the rich culinary heritage of the Philippines. Our platform is dedicated to showcasing the unique flavors, traditional dishes, and modern twists that make Filipino food so beloved around the globe.</p>
                    <a href="#"><button class="btn"><b>BROWSE</b></button></a>
                </div>
                <div class="about-img">
                    <img src="images/about.jpg" alt="foods">
                </div>
            </div>
        </section>

        <div class="food-menu" id="categories">
            <h2><b>CATEGORIES</b></h2>
        </div>

        <section class="food-section">
            <div class="food-browse">
                <div class="browse-selection">
                    <div class="browse-box">
                        <a href="breakfast.php"><img src="images/breakfast-browse.jpg" alt="food"></a>
                    </div>
                    <h3>FILIPINO BREAKFAST</h3>
                    <a href="breakfast.php"><button class="btn"><b>BROWSE</b></button></a>
                </div>
                <div class="browse-selection">
                    <div class="browse-box">
                        <a href="lunch.php"><img src="images/lunch-browse.jpg" alt="food"></a>
                    </div>
                    <h3>FILIPINO LUNCH</h3>
                    <a href="lunch.php"><button class="btn"><b>BROWSE</b></button></a>
                </div>
                <div class="browse-selection">
                    <div class="browse-box">
                        <a href="dinner.php"><img src="images/dinner-browse.jpg" alt="food"></a>
                    </div>
                    <h3>FILIPINO DINNER</h3>
                    <a href="dinner.php"><button class="btn"><b>BROWSE</b></button></a>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div>
            <p>&copy; 2024 FILIPINOCUISINE. All rights reserved. | Author: Neil Alferez</p>
        </div>
    </footer>

</body>
</html>
