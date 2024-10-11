<?php
session_start();
include("../php/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILIPINOCUISINE</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <img src="../images/logo.png" alt="bowl">
        <nav>        
            <ul>
            <li><a class="btn" href="../home.php">Home</a></li>
                <li><a class="btn" href="../home.php">About</a></li>
                <li><a class="btn" href="../home.php">Categories</a></li>
               
                <?php 
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");

                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_id = $result['Id'];
                    }
                    echo "<div class='profile'>
                        <p><b>Welcome!!  $res_Uname</b></p>
                        <li><a class='btn' href='edit.php?Id=$res_id'>Edit</a></li>
                        <li><a class='btn' id='btn' href='../php/logout.php'>Logout</a></li>
                    </div>";
                ?>
                
            </ul>
        </nav>
    </header>
<main>
    <section class="recipe-section">
        <div class="recipes">
            <div class="recipe-picture">
                <img src="../images/bola-bola.jpg" alt="food">
            </div>
                <h1>BOLA-BOLA</h1>
                <p>
                    Certainly! Here's a small description of Bola-Bola:
                    
                    Bola-Bola are Filipino-style meatballs, typically made from a mix of ground pork, beef, or chicken, combined with finely chopped vegetables, garlic, onions, and seasoned with soy sauce, salt, and pepper. These meatballs are often pan-fried or deep-fried until golden brown and crispy on the outside, while remaining juicy and flavorful on the inside. Bola-Bola can be enjoyed on their own as an appetizer, served with a dipping sauce, or added to soups like sopas or almondigas. They are a popular and versatile dish in Filipino cuisine, loved for their savory taste and satisfying texture.</p>
                <hr class="hr1">
            <div class="recipe-time">
                <h2>TOTAL TIME</h2>
                <p>30:00 minutes</p>
            </div>
                <hr>
            <div class="recipe-serving">
                <h2>SERVINGS</h2>
                <h3>Kitchen Gear:</h3>
                <ul>
                  <li>Chef's Knife</li>
                  <li>Cutting Board</li>
                  <li>Mixing Bowls</li>
                  <li>Measuring Cups and Spoons</li>
                  <li>Large Pan or Skillet</li>
                  <li>Spatula</li>
                  <li>Baking Sheet (optional)</li>
                  <li>Serving Spoon</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>500g ground pork</li>
                  <li>1 small carrot, finely grated</li>
                  <li>1 small onion, finely chopped</li>
                  <li>3 cloves garlic, minced</li>
                  <li>1 egg</li>
                  <li>1/4 cup breadcrumbs</li>
                  <li>2 tbsp soy sauce</li>
                  <li>Salt and pepper, to taste</li>
                  <li>Cooking oil, for frying</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>In a mixing bowl, combine ground pork, carrot, onion, garlic, egg, breadcrumbs, soy sauce, salt, and pepper. Mix well.</li>
                  <li>Shape the mixture into small balls.</li>
                  <li>Heat oil in a pan and fry the meatballs until golden brown and cooked through. Alternatively, bake at 180°C (350°F) for 20-25 minutes.</li>
                  <li>Serve hot with a dipping sauce or over rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>