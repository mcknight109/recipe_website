<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <section>
            <div class="form-page">
                <div class="form-img">
                    <img src="images/login-img.jpg" alt="">
                </div>
                <div class="form-field">
        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];



         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='form'>
                      <h2>This email is already used, Try another One Please!</h2>
                      <a href='javascript:self.history.back()'><button class='btn'>Go Back</button>
                  </div> <br>";
            
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Errow Occured");

            echo "<div class='form'>
                      <h2>Registration successfully!</h2>
                      <a href='login.php'><button class='btn'>Login Now</button>
                  </div> <br>";
              
         

         }

         }else{
         
        ?>
                <form action="" method="post">
                    <div class="form">
                        <h1>CREATE AN ACCOUNT</h1>
                        <div class="form-input">
                            <label for="username">Username</label><br>
                            <input type="text" name="username" id="username" autocomplete="off" required>
                        </div>
                        <div class="form-input">
                            <label for="email">Email Address</label><br>
                            <input type="email" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="form-input">
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>                       
                        <div class="form-btn">
                            <input type="submit" class="btn" name="submit" value="Register" required>
                        </div>
                            <p>By clicking the "Sign Up" button, you aree to Filipino Cuisine's Terms of Use and Privacy Policy.</p>
                        <div class="signup">
                            <a href="">Already have an account?</a>
                            <a href="login.php"><b>Login<b></a>
                        </div>
                    </div>
                    </form>
                </div>
            <?php 
        } ?>
            </div>
        </section>
</body>
</html>