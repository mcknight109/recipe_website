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
                <img src="../images/kare-kare.jpg" alt="food">
            </div>
                <h1>KARE-KARE</h1>
                <p>Kare-Kare is a traditional Filipino stew known for its rich and creamy peanut sauce. This iconic dish features tender oxtail, tripe, or pork hocks simmered until fork-tender, along with an assortment of vegetables such as eggplant, banana blossoms, string beans, and bok choy. The peanut sauce, made from ground roasted peanuts and annatto seeds for color, is thickened and flavored with garlic, onions, and shrimp paste (bagoong). Kare-Kare is typically served with a side of shrimp paste and eaten with steamed rice, offering a complex and deeply satisfying taste that reflects the diversity of Filipino cuisine.</p>
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
                  <li>Large Pot or Dutch Oven</li>
                  <li>Wooden Spoon or Silicone Spatula</li>
                  <li>Measuring Cups and Spoons</li>
                  <li>Blender or Food Processor</li>
                  <li>Strainer</li>
                  <li>Serving Spoon</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>1 kg oxtail (or beef tripe or pork hock)</li>
                  <li>2 cups water</li>
                  <li>1 banana heart, sliced</li>
                  <li>1 eggplant, sliced</li>
                  <li>1 bunch string beans, cut into 2-inch pieces</li>
                  <li>1/2 cup peanut butter</li>
                  <li>1/4 cup ground toasted rice</li>
                  <li>1 onion, chopped</li>
                  <li>4 cloves garlic, minced</li>
                  <li>2 tbsp annatto seeds (or annatto powder)</li>
                  <li>2 tbsp cooking oil</li>
                  <li>Salt and pepper, to taste</li>
                  <li>Bagoong (fermented shrimp paste), for serving</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Heat oil in a small pan. Add annatto seeds and cook until the oil turns red. Strain and set aside.</li>
                  <li>In a large pot, boil oxtail in water until tender (2-3 hours). Alternatively, use a pressure cooker.</li>
                  <li>In a blender, combine peanut butter and ground toasted rice with some broth from the boiled meat. Blend until smooth.</li>
                  <li>Heat the prepared annatto oil in a large pot. Sauté garlic and onion until fragrant.</li>
                  <li>Add the boiled meat, blended peanut sauce, and remaining broth to the pot. Bring to a boil, then add the vegetables. Simmer until the vegetables are tender.</li>
                  <li>Season with salt and pepper. Serve hot with bagoong on the side.</li>
                </ol>
            </div>
        </div>
    </section>
</main>