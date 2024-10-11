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
                <img src="../images/kawali.jpg" alt="food">
            </div>
                <h1>LECHON KAWALI</h1>
                <p>Lechon Kawali is a Filipino dish consisting of crispy fried pork belly. The pork belly is seasoned, boiled until tender, and then deep-fried to achieve a perfectly crispy skin while maintaining juicy, flavorful meat inside. Often served with a side of sarsa (a liver-based dipping sauce) or a simple soy-vinegar dipping sauce, Lechon Kawali is a popular dish known for its rich, savory taste and satisfying crunch. It's a delicious indulgence that showcases the best of Filipino comfort food.</p>
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
                  <li>Deep Fryer or Large Skillet</li>
                  <li>Tongs</li>
                  <li>Paper Towels</li>
                  <li>Mixing Bowls</li>
                  <li>Serving Plate</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>1 kg pork belly</li>
                  <li>1 tbsp salt</li>
                  <li>1 tbsp black peppercorns</li>
                  <li>3 bay leaves</li>
                  <li>1 head garlic, halved</li>
                  <li>Water, enough to cover the pork</li>
                  <li>Oil for deep frying</li>
                  <li>Dipping sauce (soy sauce with calamansi or vinegar with garlic)</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Place the pork belly in a large pot. Add salt, black peppercorns, bay leaves, garlic, and enough water to cover the pork. Boil for about 1 hour or until tender.</li>
                  <li>Remove the pork from the pot and let it cool. Pat dry with paper towels.</li>
                  <li>Heat oil in a deep fryer or large skillet. Fry the pork belly until golden brown and crispy. Be cautious as the oil may splatter.</li>
                  <li>Remove the pork from the oil and drain on paper towels. Chop into serving pieces and serve with your preferred dipping sauce.</li>
                </ol>
            </div>
        </div>
    </section>
</main>