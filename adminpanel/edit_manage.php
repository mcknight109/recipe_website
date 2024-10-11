<?php
session_start();
include("../php/config.php");

$id = $_POST['id'];


$query = "SELECT * FROM users WHERE Id='$id'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $updateQuery = "UPDATE users SET Username='$username', Email='$email', Password='$password' WHERE Id='$id'";
    mysqli_query($con, $updateQuery);
    
    header("Location: user_manage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h1>FILIPINO CUISINE ADMIN PANEL</h1>
    </header>

    <nav class="sidebar">

        <div class="menu">
        <a href="adminpanel.php"><h2>ADMIN DASHBOARD</h2></a>
            <ul>
                <li><a class="btn" href="user_manage.php">Users Management</a></li>
                <li><a class="btn" href="adminadmin.php">Recipe Management</a></li>
                <li><a class="btn" href="user_archive.php">Archives</a></li>
                <li><a class="btn" href="../login.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="edit-form">
            <h2>Edit User</h2>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $user['Id']; ?>">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $user['Username']; ?>" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user['Email']; ?>" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $user['Password']; ?>" required>
                
                <button type="submit" name="update">Update</button>
                <a href="user_manage.php" class="btn">Back</a>
            </form>
        </section>
    </main>
</body>
</html>
