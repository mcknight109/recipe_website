<?php  
session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
    header("Location: home.php");
    }
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
    <header  id="home">
        <img src="images/logo.png" alt="bowl">
        <nav>        
            <ul>
                <li><a class="btn" href="home.php">Home</a></li>
                <li><a class="btn" href="home.php">About</a></li>
                <li><a class="btn" href="home.php">Categories</a></li>
               
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
                        <li><a class='btn' id='btn' href='php/logout.php'>Logout</a></li>
                    </div>";
                ?>
            </ul>
        </nav>
    </header>

    <section class="edit-page">
                    <img src="images/home.jpg" alt="">
            <div class="form-field">

            <?php 
                if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Password='$password' WHERE Id=$id") or die("Error: " . mysqli_error($con));

                if ($edit_query) {
                    echo "<div class='form'>
                    <h2><b>Profile Updated!</b></h2>
                    <a href='home.php'><button class='btn'>Go Back</button></a>
                    </div>";
                    } else {
                    echo "Error updating profile: " . mysqli_error($con);
                }
                } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

                while ($result = mysqli_fetch_assoc($query)) {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                }
            ?>
                <form action="" method="post">
                    <div class="form">
                    <h1>UPDATE PROFILE</h1>
                        <div class="form-input">
                            <label for="username">Username</label><br>
                            <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                        </div>
                    <div class="form-input">
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                        </div>
                    <div class="form-input">
                            <label for="password">New Password</label><br>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>
                    <div class="form-btn">
                            <input type="submit" class="btn" name="submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </section>
    <footer>
        <h3>TEMP TEMP TEMP</h3>
    </footer>
</body>
</html>
