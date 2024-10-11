<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
    exit;
   }

   $query = mysqli_query($con, "SELECT * FROM recipes WHERE category = 'lunch'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILIPINOCUISINE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="home">
        <img src="images/logo.png" alt="bowl">
        <nav>
            <ul>
                <li><a class="btn" href="home.php">Home</a></li>
                <li><a class="btn" href="#About">About</a></li>
                <li><a class="btn" href="favorites.php">Favorites</a></li>
                <?php 
                    $id = $_SESSION['id'];
                    $userQuery = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");
                    while($result = mysqli_fetch_assoc($userQuery)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_id = $result['Id'];
                    }
                    echo "<div class='profile'>
                        <p><b>Welcome!! $res_Uname</b></p>
                        <li><a class='btn' href='edit.php?Id=$res_id'>Edit</a></li>
                        <li><a class='btn' id='btn' href='php/logout.php'>Logout</a></li>
                    </div>";
                ?>
            </ul>
        </nav>
    </header>

<main>
    <section class="recipe-page">
        <div id="lunch">
            <h1>LUNCH</h1>
        </div>
        
        <div class="food-browse-page">
            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <div class="recipe-box">
                    <div class="food-browse-img">
                        <a href="lunch_page/<?php echo strtolower(str_replace(' ', '_', $row['name'])); ?>.php">
                            <img id="recipe_img" src="images/<?php echo $row['image']; ?>" alt="">
                        </a>
                    </div>
                    <div class="food-browse-desc">
                        <h2 id="<?php echo strtolower($row['name']); ?>"><?php echo strtoupper($row['name']); ?></h2>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<footer>
        <div>
            <p>&copy; 2024 FILIPINOCUISINE. All rights reserved. | Author: Neil Alferez</p>
        </div>
    </footer>

</body>
</html>
