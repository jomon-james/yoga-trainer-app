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
    <title>Beginner Level</title>
    <link rel="stylesheet" href="../assets/css/style.css?v=1.1">
    </head>

<body>
    <div class="container">
        <header class="main-header">
            <h1>Intermediate Yoga Exercises</h1>
        </header>

        <div class="levels-container">
            <div class="level-card">
                <img src="../assets/images/bridge_pose.png" class="level-img">
                <h3 class="level-title">Bridge Pose</h3>
                <p> Lie on your back, bend knees, then lift hips off the ground using your feet and arms to create a bridge-like shape.</p>
            </div>

            <div class="level-card">
                <img src="../assets/images/warrior_pose.jpg" class="level-img">
                <h3 class="level-title">Warrior Pose</h3>
                <p> Stand with one leg stepped back, bend the front knee at a 90-degree angle, keeping the back leg straight, and extend arms depending on the variation of the pose.</p>
            </div>
        </div>

        <a href="home.php" class="logout-btn">Back to Levels</a>
    </div>
</body>

</html>
