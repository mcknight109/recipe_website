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
                <img src="../images/tinola.jpg" alt="food">
            </div>
                <h1>TINOLANG MANOK</h1>
                <p>Tinolang Manok is a comforting Filipino chicken soup that features tender chicken pieces simmered in a ginger-flavored broth. This traditional dish is typically cooked with green papaya or chayote and malunggay (moringa) or spinach leaves, giving it a nutritious and hearty profile. The clear, aromatic broth is infused with ginger, garlic, and onions, providing a soothing and savory flavor. Tinolang Manok is a favorite Filipino comfort food, often enjoyed during cold weather or when someone is feeling under the weather.</p>
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
                  <li>1 kg chicken, cut into serving pieces</li>
                  <li>1 thumb-sized ginger, sliced</li>
                  <li>3 cloves garlic, minced</li>
                  <li>1 onion, chopped</li>
                  <li>1 green papaya, peeled and sliced</li>
                  <li>2-3 pieces chayote (optional), peeled and sliced</li>
                  <li>1 bunch malunggay (moringa) or chili leaves</li>
                  <li>4-5 cups water</li>
                  <li>2 tbsp fish sauce</li>
                  <li>Salt and pepper, to taste</li>
                  <li>2 tbsp cooking oil</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Heat oil in a large pot. Sauté ginger, garlic, and onion until fragrant.</li>
                  <li>Add the chicken pieces and cook until they start to brown.</li>
                  <li>Add water and fish sauce. Bring to a boil, then simmer until the chicken is tender.</li>
                  <li>Add green papaya and chayote (if using). Cook until the vegetables are tender.</li>
                  <li>Add malunggay or chili leaves and simmer for another 2-3 minutes. Season with salt and pepper. Serve hot with steamed rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>