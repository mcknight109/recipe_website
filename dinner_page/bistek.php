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
                <img src="../images/bistek.jpg" alt="food">
            </div>
                <h1>BISTEK TAGALOG</h1>
                <p>Bistek Tagalog is a classic Filipino dish featuring thinly sliced beef marinated in a savory mix of soy sauce and calamansi juice, then pan-fried to perfection. Traditionally garnished with caramelized onions, this flavorful dish balances the rich umami of soy sauce with the tangy zest of calamansi, making it a beloved comfort food in Filipino households. Best served with steamed rice, Bistek Tagalog is a delicious and hearty meal that captures the essence of Filipino home cooking.</p>
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
                  <li>Mixing Bowls</li>
                  <li>Serving Plate</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>500g beef sirloin or tenderloin, thinly sliced</li>
                  <li>1/2 cup soy sauce</li>
                  <li>1/4 cup calamansi juice (or lemon juice)</li>
                  <li>2 large onions, sliced into rings</li>
                  <li>4 cloves garlic, minced</li>
                  <li>1/2 tsp ground black pepper</li>
                  <li>Cooking oil</li>
                  <li>Salt, to taste</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>In a mixing bowl, combine soy sauce, calamansi juice, garlic, and pepper. Marinate the beef slices for at least 30 minutes.</li>
                  <li>In a large pan, heat oil and sauté the onion rings until soft. Remove and set aside.</li>
                  <li>In the same pan, add more oil if needed. Fry the beef slices until browned on both sides. Pour in the marinade and bring to a boil. Simmer until the beef is tender.</li>
                  <li>Add the cooked onions back to the pan and mix well. Adjust seasoning with salt if necessary. Serve hot with steamed rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>