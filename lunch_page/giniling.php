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
                <img src="../images/giniling.jpg" alt="food">
            </div>
                <h1>PORK GINILING</h1>
                <p>Pork Giniling is a flavorful Filipino dish made with ground pork cooked in a savory tomato-based sauce with diced potatoes, carrots, bell peppers, and peas. It's seasoned with garlic, onions, soy sauce, and sometimes a touch of sugar or vinegar to balance the flavors. This hearty and comforting dish is often served with steamed rice, making it a satisfying meal that's enjoyed by many Filipinos. Pork Giniling is a versatile dish that can be found on dining tables across the Philippines, loved for its delicious taste and simple preparation.

                </p>
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
                  <li>Large Pan or Skillet</li>
                  <li>Wooden Spoon or Silicone Spatula</li>
                  <li>Measuring Cups and Spoons</li>
                  <li>Serving Spoon</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>500g ground pork</li>
                  <li>1 potato, diced</li>
                  <li>1 carrot, diced</li>
                  <li>1 bell pepper, diced</li>
                  <li>1 onion, chopped</li>
                  <li>3 cloves garlic, minced</li>
                  <li>1 cup tomato sauce</li>
                  <li>1 cup water</li>
                  <li>2 tbsp soy sauce</li>
                  <li>Salt and pepper, to taste</li>
                  <li>2 tbsp cooking oil</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Heat oil in a large pan. Sauté garlic and onion until fragrant.</li>
                  <li>Add ground pork and cook until browned.</li>
                  <li>Add potato, carrot, and bell pepper. Cook for a few minutes.</li>
                  <li>Add tomato sauce, water, and soy sauce. Bring to a boil, then reduce to a simmer. Cook until the vegetables are tender and the sauce has thickened.</li>
                  <li>Season with salt and pepper. Serve hot over steamed rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>