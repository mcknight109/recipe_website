<?php
session_start();
include("../php/config.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // JavaScript confirmation added
    echo "<script>
            if (confirm('Are you sure you want to delete this user?')) {
                window.location.href = 'user_manage.php?delete_id=$id'; // Redirect to delete with confirmation
            } else {
                // Do nothing if user cancels
            }
          </script>";
}

// Actual delete operation after confirmation
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $query = "INSERT INTO archives SELECT * FROM users WHERE Id='$id'";
    mysqli_query($con, $query);
    $query = "DELETE FROM users WHERE Id='$id'";
    mysqli_query($con, $query);
}

$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                <li><a class="btn" href="adminpanel.php">Recipe Management</a></li>
                <li><a class="btn" href="user_archive.php">Archives</a></li>
                <li><a class="btn" href="../login.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td>
                        <form method="post" action="edit_manage.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                            <button type="submit">Edit</button>
                        </form>
                        <form method="post" action="" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>
