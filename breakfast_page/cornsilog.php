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
                    $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

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
                <img src="../images/cornsilog.jpg" alt="food">
            </div>
                <h1>CORNSILOG</h1>
                <p>Cornsilog is a delightful Filipino breakfast combo that includes corned beef, sinangag (garlic fried rice), and itlog (fried egg). This hearty and satisfying meal brings together the savory flavors of corned beef sautéed with onions and garlic, paired with the aromatic and flavorful garlic fried rice, and topped off with a perfectly fried egg. Cornsilog is a popular choice for a filling and delicious start to the day, reflecting the comforting and robust flavors of Filipino cuisine.</p>
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
                  <li>1 can (340g) corned beef</li>
                  <li>1 onion, chopped</li>
                  <li>2 cloves garlic, minced</li>
                  <li>1 tbsp cooking oil</li>
                  <li>4 cups cooked rice</li>
                  <li>4 cloves garlic, minced</li>
                  <li>4 eggs</li>
                  <li>Salt and pepper, to taste</li>
                  <li>Cooking oil or butter for frying</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Heat oil in a pan and sauté garlic and onion until fragrant. Add corned beef and cook until heated through. Set aside.</li>
                  <li>Sauté garlic in the same pan until golden brown. Add cooked rice and stir-fry until heated through. Season with salt.</li>
                  <li>Fry the eggs sunny-side up or to your preference. Season with salt and pepper.</li>
                  <li>Serve the corned beef with garlic fried rice and fried eggs on a plate.</li>
                </ol>
            </div>
        </div>
    </section>
</main>
</body>
</html>
