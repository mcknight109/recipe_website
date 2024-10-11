<?php 
   session_start();


   include("php/config.php");
             
   if(isset($_POST['submit'])){
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);

      $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
      $row = mysqli_fetch_assoc($result);

      if(is_array($row) && !empty($row)){
         $_SESSION['valid'] = $row['Email'];
         $_SESSION['username'] = $row['Username'];
         $_SESSION['id'] = $row['Id'];
         

         if ($email == 'admin@example.com' && $password == 'admin123') {
            header("Location: adminpanel/adminpanel.php");
            exit;
         } else {
            header("Location: home.php");
            exit;
         }
      } else {
         echo "<div class='form-field'>
            <p>Wrong Username or Password</p>
         </div> <br>";
         echo "<a href='login.php'><button class='btn'>Go Back</button>";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-page">
            <div class="form-img">
                <img src="images/login-img.jpg" alt="foods">
            </div>
            <div class="form-field">
                <form action="" method="post">
                    <div class="form">
                        <h1>LOGIN HERE</h1>
                        <div class="form-input">
                            <label for="username">Email</label><br>
                            <input type="email" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="form-input">
                            <label for="username">Password</label><br>
                            <input type="password" name="password" id="password" autocomplete="password" required>
                        </div>
                        <div class="form-btn">
                            <input type="submit" class="btn" name="submit" value="Login" required>
                        </div>
                        <div class="signup">
                            <a href="">Don't have an account?</a>
                            <a href="signup.php"><b>Signup<b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
