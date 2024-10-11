<?php
    include("../php/config.php");

    $categories = ['breakfast', 'lunch', 'dinner'];
    $counts = [];

    foreach ($categories as $category) {
        $query = mysqli_query($con, "SELECT COUNT(*) AS count FROM recipes WHERE category = '$category'");
        $row = mysqli_fetch_assoc($query);
        $counts[$category] = $row['count'];
    }

    $userQuery = mysqli_query($con, "SELECT COUNT(*) AS user_count FROM users");
    $userRow = mysqli_fetch_assoc($userQuery);
    $userCount = $userRow['user_count'];
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
        <section class="dashboard">
            <?php foreach ($categories as $category): ?>
                <div class="dashboard-item">
                    <h3><b><?php echo strtoupper($category); ?></b></h3>
                    <p>Total: <?php echo $counts[$category]; ?></p>
                </div>
            <?php endforeach; ?>
            <div class="dashboard-item">
                <h3><b>TOTAL USERS</b></h3>
                <p>Total: <?php echo $userCount; ?></p>
            </div>
        </section>
    </main>
</body>
</html>
