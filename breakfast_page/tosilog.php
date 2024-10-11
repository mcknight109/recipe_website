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
                <img src="../images/tosilog.jpg" alt="food">
            </div>
                <h1>TOSILOG</h1>
                <p>Tosilog is a beloved Filipino breakfast dish that features tocino (sweet cured pork), sinangag (garlic fried rice), and itlog (fried egg). Tocino, known for its sweet and savory flavor with a caramelized glaze, pairs perfectly with the aromatic garlic fried rice and a sunny-side-up egg. This delightful combination makes Tosilog a popular choice for a comforting and flavorful breakfast that showcases the rich tastes of Filipino cuisine.</p>
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
                  <li>Rice Cooker or Pot</li>
                  <li>Serving Spoon</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>500g pork belly, thinly sliced</li>
                  <li>1/2 cup pineapple juice</li>
                  <li>1/4 cup sugar</li>
                  <li>1/4 cup banana ketchup</li>
                  <li>1/4 cup soy sauce</li>
                  <li>4 cloves garlic, minced</li>
                  <li>1/2 tsp black pepper</li>
                  <li>2 tbsp cooking oil</li>
                  <li>4 cups cooked rice</li>
                  <li>4 cloves garlic, minced</li>
                  <li>4 eggs</li>
                  <li>Salt and pepper, to taste</li>
                  <li>Cooking oil or butter for frying</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Marinate the pork with pineapple juice, sugar, banana ketchup, soy sauce, garlic, and pepper for at least 1 hour or overnight.</li>
                  <li>Heat oil in a pan and cook the marinated pork until caramelized and cooked through. Set aside.</li>
                  <li>Sauté garlic in the same pan until golden brown. Add cooked rice and stir-fry until heated through. Season with salt.</li>
                  <li>Fry the eggs sunny-side up or to your preference. Season with salt and pepper.</li>
                  <li>Serve the tocino with garlic fried rice and fried eggs on a plate.</li>
                </ol>
            </div>
        </div>
    </section>
</main>