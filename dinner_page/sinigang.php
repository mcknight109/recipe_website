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
                <img src="../images/sinigang.jpg" alt="food">
            </div>
                <h1>SINIGANG</h1>
                <p>Sinigang is a traditional Filipino soup known for its distinctive sour and savory flavor. Typically made with a variety of meats such as pork, beef, shrimp, or fish, Sinigang is simmered with a medley of vegetables like radish, eggplant, water spinach, and string beans. The hallmark of this dish is its tangy broth, which is commonly flavored with tamarind (sampalok) or other souring agents like green mango, calamansi, or kamias. Sinigang is a beloved comfort food in the Philippines, enjoyed for its refreshing and hearty qualities.</p>
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
                  <li>Large Pot</li>
                  <li>Wooden Spoon or Silicone Spatula</li>
                  <li>Measuring Cups and Spoons</li>
                  <li>Mixing Bowls</li>
                  <li>Serving Bowl</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>1 kg pork ribs or belly, cut into chunks</li>
                  <li>1 large onion, quartered</li>
                  <li>2 tomatoes, quartered</li>
                  <li>1 radish, sliced</li>
                  <li>1 eggplant, sliced</li>
                  <li>1 bunch string beans, cut into 2-inch pieces</li>
                  <li>1 bunch kangkong (water spinach) or spinach</li>
                  <li>1 packet sinigang mix or 1/2 cup tamarind paste</li>
                  <li>2-3 green chili peppers</li>
                  <li>2 tbsp fish sauce</li>
                  <li>Salt and pepper, to taste</li>
                  <li>Water, enough to cover the ingredients</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>In a large pot, combine pork, onion, tomatoes, and enough water to cover the ingredients. Bring to a boil, then simmer until the pork is tender.</li>
                  <li>Add radish, eggplant, and string beans. Cook until the vegetables are tender.</li>
                  <li>Add sinigang mix or tamarind paste, fish sauce, and green chili peppers. Adjust the seasoning with salt and pepper.</li>
                  <li>Add kangkong or spinach and simmer for another 2-3 minutes. Serve hot with steamed rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>