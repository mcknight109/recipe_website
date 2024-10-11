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
                <img src="../images/adoboo.jpg" alt="food">
            </div>
                <h1>ADOBONG FILIPINO</h1>
                <p>Adobo is a quintessential Filipino dish known for its savory and tangy flavor profile. It typically features chicken, pork, or a combination of both, marinated and simmered in a mixture of soy sauce, vinegar, garlic, bay leaves, and black peppercorns. The meat is cooked until tender and infused with the rich, umami flavors of the marinade, which reduces to a deliciously thick sauce. Adobo is a versatile and beloved staple in Filipino cuisine, celebrated for its simplicity, deep flavor, and ability to improve over time.</p>
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
                  <li>Large Pot or Dutch Oven</li>
                  <li>Wooden Spoon or Silicone Spatula</li>
                  <li>Tongs</li>
                  <li>Serving Spoon</li>
                </ul>
                <h3>Ingredients:</h3>
                <ul>
                  <li>1 kg chicken or pork (cut into pieces)</li>
                  <li>1/2 cup soy sauce</li>
                  <li>1/2 cup vinegar</li>
                  <li>1/2 cup water</li>
                  <li>6 cloves garlic, crushed</li>
                  <li>2 bay leaves</li>
                  <li>1 tsp whole black peppercorns</li>
                  <li>1 tbsp sugar (optional)</li>
                  <li>2 tbsp cooking oil</li>
                </ul>
                <h3>Instructions:</h3>
                <ol>
                  <li>Marinate the meat with soy sauce, vinegar, garlic, and peppercorns for at least 30 minutes or overnight.</li>
                  <li>Heat oil in a pot and brown the marinated meat on all sides. Remove and set aside.</li>
                  <li>Add the marinated meat back to the pot along with the marinade, bay leaves, water, and sugar. Bring to a boil, then reduce to a simmer.</li>
                  <li>Simmer until the meat is tender and the sauce has reduced to your desired consistency (about 45 minutes).</li>
                  <li>Serve hot over steamed rice.</li>
                </ol>
            </div>
        </div>
    </section>
</main>