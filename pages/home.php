<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/style.css?v=1.1">
    </head>

<body>
    <div class="container">
        <header class="main-header">
            <h1>Choose Your Yoga Level</h1>
        </header>

        <div class="levels-container">
            <div class="level-card">
                <a href="beginner.php">
                    <img src="../assets/images/yoga_beginner.jpg" class="level-img">
                    <h3 class="level-title">Beginner</h3>
                </a>
            </div>
            <div class="level-card">
                <a href="intermediate.php">
                    <img src="../assets/images/yoga_beginner.jpg" class="level-img">
                    <h3 class="level-title">Intermediate</h3>
                </a>
            </div>
            <div class="level-card">
                <a href="advanced.php">
                    <img src="../assets/images/yoga_beginner.jpg" class="level-img">
                    <h3 class="level-title">Advanced</h3>
                </a>
            </div>
        </div>

        <a href="../auth/logout.php" class="logout-btn">Logout</a>
    </div>
</body>

</html>
